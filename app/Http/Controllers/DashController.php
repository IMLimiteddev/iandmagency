<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Information;
use App\Models\Media;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DashController extends Controller
{
    public function profileView()
    {

        $user = Auth::user();
        return view('candidate.update-profile', compact('user'));
    }
    public function profileUpdate(Request $request)
    {

        $validatedData = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email'=> 'required',
            'phone'=> 'required',
            'bio'=> 'required|string',
            'department'=> 'required|string',
            'professional_skills' => 'required|array',
            // 'professional_skills.*' => 'nullable',
            'hobbies' => 'required|array',
            // 'hobbies.*' => 'nullable',
            'country'=>'required',
            'languages'=>'required',
            'experience_yr'=>'required',
            'address'=>'required',


        ]);

        // dd($request->all());

        $user = auth()->user();

        // dd($user);

        if ($request->hasFile('image')) {

            $file_path = self::imageUploader($request->image, $user, 'profile_picture');
            $validatedData['image'] = $file_path;
        }


        // $gender = '';
        if ($request->male==1) {
            $gender = 'male';
        }
        if ($request->female==1) {
            $gender = 'female';
        }

        // dd($request->all());

        $professionalSkills = implode(', ', $validatedData['professional_skills']);
        $hobbies = implode(', ', $validatedData['hobbies']);

        if (!Information::where('user_id', $user->id)->exists()) {

            Information::create([
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'dob' => $validatedData['dob'],
                'gender' => $gender,
                'user_id' => $user->id,
                'experience_yr' => $validatedData['experience_yr'],
                'country' => $validatedData['country'],
                'languages' => $validatedData['languages'],
                'address' => $validatedData['address'],
                'email' => $validatedData['email'],
                'bio' => $validatedData['bio'],
                'department' => $validatedData['department'],
                'professional_skills' =>  $professionalSkills,
                'hobbies' =>  $hobbies,
                'phone' => $validatedData['phone'],
                'image' => $validatedData['image'] ?? $user->image,
                'profile_completion_percentage'=> 25
            ]);

            Alert::success('Success', 'Display info Updated Successfully.');

            return redirect()->route('candidate.education.view');
        }

        Alert::info('Info', 'You already have a personal record, please navigate to edit if you wish to edit the info.');
        return back();

    }


    public function educationView()
    {

        $user = Auth::user();
        return view('candidate.education', compact('user'));
    }

    public function educationUpdate(Request $request)
    {


        $user = Auth::user();
        $info = Information::where('user_id',$user->id)->first();


         // Validate the request data
        $validatedData = $request->validate([
            'degree' => 'required|array|min:1',
            'degree.*' => 'required|string|max:255',
            'school' => 'required|array|min:1',
            'school.*' => 'required|string|max:255',
            'education_start_yr' => 'required|array|min:1',
            'education_start_yr.*' => 'required|date',
            'education_end_yr' => 'required|array|min:1',
            'education_end_yr.*' => 'required|date|after_or_equal:work_start_yr.*',
            'educational_description' => 'required|array|min:1',
            'educational_description.*' => 'required|string|max:500',
            'degree_upload' => 'required|array|min:1',
            'degree_upload.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,pdf,doc,docx|max:2048',

        ]);

        if (!Education::where('user_id', $user->id)->exists()) {

            foreach ($validatedData['degree'] as $index => $degree) {

                    if (isset($request->degree_upload[$index])) {
                    $file_name=self::imageUploader($request->degree_upload[$index], $user, 'Degree-uploads');
                    }
                    Education::create([
                        'user_id' => $user->id,
                        'information_id' => $info->id,
                        'degree' => $degree,
                        'degree_upload' => $file_name,
                        'school' => $validatedData['school'][$index],
                        'education_start_yr' => $validatedData['education_start_yr'][$index],
                        'education_end_yr' => $validatedData['education_end_yr'][$index],
                        'educational_description' => $validatedData['educational_description'][$index],
                    ]);
            }
            $info->profile_completion_percentage = 50;
            $info->save();
            Alert::success('Success', 'Educational Experience Added Successfully');
            return redirect()->route('candidate.work.view');
        }

        Alert::info('Info', 'You already have an Educational record, please navigate to edit if you wish to edit this info.');
        return back();
    }


    public function workView()
    {

        $user = Auth::user();
        return view('candidate.work', compact('user'));
    }

    public function workUpdate(Request $request)
    {

        $user = Auth::user();
        $info = Information::where('user_id', $user->id)->first();

         // Validate the request data
        $validatedData = $request->validate([
            'company_name' => 'required|array|min:1',
            'company_name.*' => 'required|string|max:255',
            'role' => 'required|array|min:1',
            'role.*' => 'required|string|max:255',
            'work_start_yr' => 'required|array|min:1',
            'work_start_yr.*' => 'required|date',
            'work_end_yr' => 'required|array|min:1',
            'work_end_yr.*' => 'required|date|after_or_equal:work_start_yr.*',
            'job_description' => 'required|array|min:1',
            'job_description.*' => 'required|string|max:500',
        ]);

        if (!Work::where('user_id', $user->id)->exists()) {

            foreach ($validatedData['company_name'] as $index => $company_name) {
                Work::create([
                    'user_id' => $user->id,
                    'information_id' => $info->id,
                    'company_name' => $company_name,
                    'role' => $validatedData['role'][$index],
                    'work_start_yr' => $validatedData['work_start_yr'][$index],
                    'work_end_yr' => $validatedData['work_end_yr'][$index],
                    'job_description' => $validatedData['job_description'][$index],
                ]);
            }


            // dd('i got heer');
            $info->profile_completion_percentage = 75;
            $info->save();
            Alert::success('Success', 'Work Experience Added Successfully, your profile will be active once we have verified your details.');
            return redirect()->route('candidate.media.view');
        }


        Alert::info('Info', 'You already have an Educational record, please navigate to edit if you wish to edit this info.');
        return back();

    }

    public function mediaView()
    {

        $user = Auth::user();
        return view('candidate.media-upload', compact('user'));
    }

    public function mediaUpdate(Request $request)
    {

        $user = Auth::user();
        $info = Information::where('user_id', $user->id)->first();

        // dd($info);

         // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|array|min:1',
            'title.*' => 'required|string|max:255',
            'cv_upload' => 'required|file|mimes:jpeg,png,jpg,gif,pdf,doc,docx|max:2048',
            'intro_video' => 'required',
            'media_upload' => 'required|array|min:1',
            'media_upload.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,pdf,doc,docx|max:2048',
        ]);

        if (!Media::where('user_id', $user->id)->exists()) {


            if (isset($request->cv_upload)) {
                $cv_name=self::imageUploader($request->cv_upload, $user, 'Media-uploads');
                $media = new Media();
                $media->cv_upload = $cv_name;
                $media->user_id = $user->id;
                $media->information_id =$info->id;
                $media->save();
                }

            if (isset($request->intro_video)) {
                $video_name=self::videoUploader($request->intro_video, $user, 'Media-uploads');
                $media = new Media();
                $media->intro_video = $video_name;
                $media->user_id = $user->id;
                $media->information_id =$info->id;
                $media->save();
                }

            foreach ($validatedData['title'] as $index => $title) {
                if (isset($request->media_upload[$index])) {
                    $file_name=self::imageUploader($request->media_upload[$index], $user, 'Media-uploads');
                    }

                Media::create([
                    'user_id' => $user->id,
                    'information_id' => $info->id,
                    'title' => $title,
                    'media_upload' => $file_name,
                ]);
            }

            $info->profile_completion_percentage = 100;
            $info->save();
            Alert::success('Success', 'Media files Added Successfully, your profile will be active once we have verified your details.');
            return back();
        }


        Alert::info('Info', 'You already have the required number of media record, please navigate to edit if you wish to edit this info.');
        return back();

    }








    // My tools
    public static function imageUploader($fileRequest, $user, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug($user->name).time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }
    public static function videoUploader($fileRequest, $user, $folderName){


        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug($user->name).time().".".$ext;
        $file_path = $fileRequest->storeAs('public/'.$folderName, $name);

        $file_name = '/'.'storage/'.$folderName.'/'.$name;
        return $file_name;

    }
}
