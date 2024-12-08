
<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('admin')->group(function () {

    Route::get('/activate-user/{info}', [AdminController::class, 'activateUser'])->name('admin.activate.user');
    Route::get('/deactivate-user/{info}', [AdminController::class, 'deactivateUser'])->name('admin.deactivate.user');

    Route::get('/all-candidates', [AdminController::class, 'allCandidates'])->name('admin.all.candidates');
    Route::get('/single-candidate/{email}', [AdminController::class, 'singleCandidate'])->name('admin.single.candidate');

    Route::get('/all-requests', [AdminController::class, 'allRequest'])->name('admin.all.requests');
    Route::get('/single-request/{request_id}', [AdminController::class, 'singleRequest'])->name('admin.single.request');
    Route::get('/respond-to-request/{req}', [AdminController::class, 'respondRequest'])->name('admin.respond.request');


    Route::get('/all-companies', [AdminController::class, 'allCompanies'])->name('admin.all.companies');
    // Route::get('/single-request', [AdminController::class, 'singleRequest'])->name('admin.single.request');


    Route::get('/book-event', [AdminController::class, 'bookEvent'])->name('admin.book.event');
    Route::post('/book', [AdminController::class, 'book'])->name('admin.book');
    Route::get('/all-events', [AdminController::class, 'allEvents'])->name('admin.all.events');
    Route::post('/cancel-event/{booking}', [AdminController::class, 'cancelEvent'])->name('admin.cancel.event');

    Route::get('/remake-event/{booking}', [AdminController::class, 'remakeEvent'])->name('admin.remake.event');
    Route::post('/update-event/{booking}', [AdminController::class, 'updateEvent'])->name('admin.update.book');


    Route::get('/all-users', [AdminController::class, 'allUsers'])->name('admin.all.users');
});

