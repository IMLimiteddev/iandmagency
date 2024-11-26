
<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::get('/activate-user/{info}', [AdminController::class, 'activateUser'])->name('admin.activate.user');

    Route::get('/all-candidates', [AdminController::class, 'allCandidates'])->name('admin.all.candidates');
    Route::get('/single-candidate/{email}', [AdminController::class, 'singleCandidate'])->name('admin.single.candidate');

    Route::get('/all-requests', [AdminController::class, 'allRequest'])->name('admin.all.requests');
    Route::get('/single-request', [AdminController::class, 'singleRequest'])->name('admin.single.request');

    Route::get('/all-companies', [AdminController::class, 'allCompanies'])->name('admin.all.companies');
    // Route::get('/single-request', [AdminController::class, 'singleRequest'])->name('admin.single.request');


    Route::get('/book-event', [AdminController::class, 'bookEvent'])->name('admin.book.event');
    Route::post('/book', [AdminController::class, 'book'])->name('admin.book');

});

