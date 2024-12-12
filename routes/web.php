<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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


    Route::get('/portfolio', [OnboardingController::class, 'portfolio_colors'])->name('portfolio.colors');

});


Route::prefix('candidate-dash')->group(function () {

    Route::get('/update-profile-view', [DashController::class, 'profileView'])->name('candidate.profile.view');
    Route::post('/update-profile', [DashController::class, 'profileUpdate'])->name('candidate.profile.update');
    Route::get('/profile-view', [DashController::class, 'profileDisplay'])->name('candidate.profile.display');


    Route::get('/update-education-view', [DashController::class, 'educationView'])->name('candidate.education.view');
    Route::post('/update-education', [DashController::class, 'educationUpdate'])->name('candidate.education.update');

    Route::get('/update-work-view', [DashController::class, 'workView'])->name('candidate.work.view');
    Route::post('/update-work', [DashController::class, 'workUpdate'])->name('candidate.work.update');

    Route::get('/update-media-view', [DashController::class, 'mediaView'])->name('candidate.media.view');
    Route::post('/update-media', [DashController::class, 'mediaUpdate'])->name('candidate.media.update');


    Route::get('/event-view', [DashController::class, 'eventDisplay'])->name('candidate.events.display');


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
