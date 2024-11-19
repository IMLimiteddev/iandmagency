<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DashController extends Controller
{
    public function profileView()
    {

        return view('candidate.update-profile');
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
        ]);

        $user = auth()->user();

        // dd($user);

        if ($request->hasFile('image')) {


            $ext = $request->image->getClientOriginalExtension();
            $name = \Str::slug($request->last_name).time().".".$ext;
            $image_path = $request->image->move(public_path('profile_picture'), $name);

            // Save the new image path in the validated data
            $validatedData['image'] = $name;
        }


        // $gender = '';
        if ($request->male==1) {
            $gender = 'male';
        }
        if ($request->female==1) {
            $gender = 'female';
        }

        // dd($request->all());

        Information::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'dob' => $validatedData['dob'],
            'gender' => $gender,
            'user_id' => $user->id,
            'email' => $validatedData['email'],
            'bio' => $validatedData['bio'],
            'department' => $validatedData['department'],
            'phone' => $validatedData['phone'],
            'image' => $validatedData['image'] ?? $user->image,
        ]);

        Alert::success('Success', 'Disply info Updated Successfully.');

        return back();
    }
}
