<?php

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
    Route::get('/portfolio', [OnboardingController::class, 'portfolio'])->name('portfolio');
});

require __DIR__.'/auth.php';
