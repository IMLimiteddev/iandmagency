<?php

namespace App\Http\Controllers\Ai;

use App\Http\Controllers\Controller;
use App\Http\Requests\AiUploaadedRequest;
use App\Models\AiUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;
use RealRashid\SweetAlert\Facades\Alert;

class AiConverterController extends Controller
{
    public function aiProject()
    {
        return view('ai-project.index');

    }

    public function aiWorkArea($id = null)
    {

        $data['result'] = AiUpload::where('id',$id)->where('status', 'converted')->first();
        return view('ai-project.workarea', $data);
    }

    // public function aiUploadFile(AiUploaadedRequest $request)
    // {

    //     return back();
    // }

    public function aiUploadFile(AiUploaadedRequest $request)
    {
        $validated = $request->validate([
            'file' => 'required|file|mimes:pdf|max:10240',
        ]);

        // Uploaded file
        $file = $request->file('file');

        // Create a unique name: IandM.######.pdf
        $uniqueName = 'IandM.' . rand(100000, 999999) . '.pdf';

        // Store file in 'uploads' folder inside storage/app/
        $path = $file->storeAs('public/uploads', $uniqueName); // No 'public' disk used

        $fullPath = storage_path('app/' . $path); // absolute path

        // dd($fullPath);
        $response = Http::attach(
            'file',          // name of form field expected by FastAPI
            file_get_contents($fullPath),
            $uniqueName
        )->post('https://ai-4-v2k7.onrender.com/process_pdf/');



        if ($response->successful()) {

            // Log into DB
            $upload = new AiUpload();
            $upload->file_name = $uniqueName;
            $upload->path = $path;
            $upload->save();

            $data = $response->json(); // Decode the JSON response

            $upload->txt = $data['output_files']['txt'] ?? null;
            $upload->excel = $data['output_files']['excel'] ?? null;
            $upload->pdf = $data['output_files']['pdf'] ?? null;
            $upload->base_file = $data['base_filename'] ?? null;
            $upload->save();

            $files = $data['output_files'];
            $base = $data['base_filename'];

            foreach ($files as $type => $filename) {
                $downloadUrl = "https://ai-4-v2k7.onrender.com/download/{$filename}";

                $fileResponse = Http::get($downloadUrl);

                if ($fileResponse->successful()) {

                    Storage::disk('local')->put("public/converted/{$filename}", $fileResponse->body());
                }

                $upload->status = 'converted';
                $upload->save();
            }

            $data['txt'] = $upload->txt;
            $data['excel'] = $upload->excel;
            $data['pdf'] = $upload->pdf;
            $data['base_file'] = $upload->base_file;

            Alert::success('Success', 'AI processing successful.');
            return redirect()->route('ai-workarea', ['id' => $upload->id]);

        }else{

            Alert::info('Error', 'Error did not process successfully.');
            return back();

        }
    }

    public function aiLogin()
    {
        return view('ai-project.login');
    }

    public function aiLoginAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('ai-project');
        }

        Alert::info('Failed', 'User Not found');
        return back()->withErrors(new MessageBag([
            'login' => 'Invalid credentials. Please try again.'
        ]))->withInput();
    }

}
