<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\ProfileController;
use App\Mail\CandidateConfirmationMail;
use App\Mail\CandidateRescheduleMail;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('web/')->group(function () {
    Route::get('/contact-us', [OnboardingController::class, 'contact_us'])->name('contact.us');
    Route::get('/about-us', [OnboardingController::class, 'about_us'])->name('about.us');
    Route::get('/candidates-list', [OnboardingController::class, 'candidates_list'])->name('candidates.list');
    Route::get('/employer-list', [OnboardingController::class, 'employer_list'])->name('employer.list');
    Route::get('/job-list', [OnboardingController::class, 'job_list'])->name('job.list');
    Route::get('/port', [OnboardingController::class, 'portfolio'])->name('portfolio');
    Route::get('/terms', [OnboardingController::class, 'terms'])->name('terms');
    Route::get('/privacy', [OnboardingController::class, 'privacy'])->name('privacy');
    Route::get('/works', [OnboardingController::class, 'works'])->name('works');
    Route::get('/disclaimer', [OnboardingController::class, 'disclaimer'])->name('disclaimer');

    Route::get('/search', [OnboardingController::class, 'candidateSearch'])->name('onboarding.search.candidates');


    Route::get('/portfolio', [OnboardingController::class, 'portfolio_colors'])->name('portfolio.colors');

});


Route::prefix('candidate-dash')->middleware('candidate')->group(function () {

    Route::get('/update-profile-view', [DashController::class, 'profileView'])->name('candidate.profile.view');
    Route::post('/update-profile', [DashController::class, 'profileUpdate'])->name('candidate.profile.update');
    Route::get('/profile-view', [DashController::class, 'profileDisplay'])->name('candidate.profile.display');
    Route::get('/profile-edit-view/{info?}', [DashController::class, 'profileEditView'])->name('candidate.edit.profile.view');


    Route::get('/update-education-view', [DashController::class, 'educationView'])->name('candidate.education.view');
    Route::post('/update-education', [DashController::class, 'educationUpdate'])->name('candidate.education.update');
    Route::post('/edit-education/{ed?}', [DashController::class, 'educationEdit'])->name('candidate.education.edit');

    Route::get('/update-work-view', [DashController::class, 'workView'])->name('candidate.work.view');
    Route::post('/update-work', [DashController::class, 'workUpdate'])->name('candidate.work.update');
    Route::post('/edit-work/{work?}', [DashController::class, 'workEdit'])->name('candidate.work.edit');

    Route::get('/update-media-view', [DashController::class, 'mediaView'])->name('candidate.media.view');
    Route::post('/update-media', [DashController::class, 'mediaUpdate'])->name('candidate.media.update');
    Route::post('/edit-media-upload/{media?}', [DashController::class, 'mediaUploadEdit'])->name('candidate.media-upload.edit');
    Route::post('/edit-vid-upload/{media?}', [DashController::class, 'videoEdit'])->name('candidate.intro-video.edit');
    Route::post('/edit-cv-upload/{media?}', [DashController::class, 'cvEdit'])->name('candidate.cv-upload.edit');
    Route::post('/edit-profile/{media?}', [DashController::class, 'profileEdit'])->name('candidate.profile-info.edit');


    Route::get('/event-view', [DashController::class, 'eventDisplay'])->name('candidate.events.display');

    Route::prefix('email')->group(function () {
        Route::post('confirmation/{id?}/{event?}', function ($id, $event) {
            $message = [
                'message' => 'I will be in attendance.',
                'user' => User::findOrFail($id)->email,
                'event' => Booking::findOrFail($event)->id,
            ];
            Mail::to('clintonace09@gmail.com')->send(new CandidateConfirmationMail($message));
            Alert::success('Success', 'Mail sent');
            return back();
        })->name('candidate.confirm.meeting');

        Route::post('reschedule/{id?}/{event?}', function ($id, $event) {
            $message = [
                'message' => 'Can we reschedule.',
                'user' => User::findOrFail($id)->email,
                'event' => Booking::findOrFail($event)->id,
            ];

            Mail::to('clintonace09@gmail.com')->send(new CandidateRescheduleMail($message));
            Alert::success('Success', 'Mail sent');
            return back();
        })->name('candidate.reschedule.mail');
    });


});

Route::prefix('candidate')->group(function () {

    Route::get('/details/{info_email}', [OnboardingController::class, 'candidateDetails'])->name('onboarding.candidate.details');

});


Route::prefix('engage')->middleware('company')->group(function () {

    Route::post('/notify-candidate-admin/{user_id}', [OnboardingController::class, 'candidateEngage'])->name('candidate.engagement.notification');

});

Route::prefix('company')->middleware('company')->group(function () {

    Route::get('profile-view', [CompanyController::class, 'profileView'])->name('company.profile.view');
    Route::post('profile-update', [CompanyController::class, 'profileUpdate'])->name('company.profile.update');
    Route::get('profile', [CompanyController::class, 'profile'])->name('company.profile.display');


    Route::get('events-display', [CompanyController::class, 'eventsDisplay'])->name('company.events.display');
    Route::get('requests-display', [CompanyController::class, 'requestsDisplay'])->name('company.requests.display');

});






// Mail::raw('Testing email functionality for the email', function ($message) {
//     $message->to('clintonace09@gmail.com')
//             ->subject('Test Email');
// });




require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
