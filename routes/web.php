<?php

use App\Http\Controllers\ProfileController;
use App\Domains\Newsletter\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::post('/newsletter', [NewsletterController::class, 'registerEmailForNewsletter'])->name('register_email_for_newsletter');
Route::get('/delete-newsletter', [NewsletterController::class, 'unregisterEmailFromNewslettere']);

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
