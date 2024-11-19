<?php

namespace App\Http\Controllers;

use App\Mail\EngagementNotification;
use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\returnSelf;

class OnboardingController extends Controller
{
    public function contact_us()
    {

        return view('onboarding.contact-us');
    }
    public function about_us()
    {

        return view('onboarding.about-us');
    }
    public function candidates_list()
    {

        $infos = Information::all();
        return view('onboarding.candidates-list', compact('infos'));
    }
    public function employer_list()
    {

        return view('onboarding.employer-list');
    }
    public function job_list()
    {

        return view('onboarding.job-list');
    }
    // public function portfolio()
    // {

    //     return view('onboarding.portfolio');
    // }
    public function portfolio()
    {

        return view('onboarding.porty');
    }
    public function portfolio_colors()
    {

        return view('onboarding.portfolio-colors');
    }

    public function candidateDetails($info_id)
    {

        $information = Information::findOrFail($info_id);
        $user = User::where('id', $information->user_id)->get();
        return view('onboarding.candidate.single', compact('user', 'information'));
    }

    public function candidateEngage($user_id, Request $request)
    {


        $user = User::findOrFail($user_id);

        $messageContent = $request->message;

        // dd($message);

        Mail::to($request->email)
            ->cc('clintonace09@gmail.com')
            ->send(new EngagementNotification($messageContent));

            Alert::success('Success', 'Email Sent Successfully to both parties. Hold on for a reply.');

            return back();
    }
}
