<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('onboarding.candidates-list');
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
}
