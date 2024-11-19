<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\ProfileController;
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


Route::prefix('dash')->group(function () {

    Route::get('/update-profile-view', [DashController::class, 'profileView'])->name('candidate.profile.view');
    Route::post('/update-profile', [DashController::class, 'profileUpdate'])->name('candidate.profile.update');

});

Route::prefix('candidate')->group(function () {

    Route::get('/details/{info_id}', [OnboardingController::class, 'candidateDetails'])->name('onboarding.candidate.details');

});


Route::prefix('engage')->group(function () {

    Route::post('/notify-candidate-admin/{user_id}', [OnboardingController::class, 'candidateEngage'])->name('candidate.engagement.notification');

});




require __DIR__.'/auth.php';
