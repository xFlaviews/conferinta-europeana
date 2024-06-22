<?php

use App\Domains\Newsletter\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'backend.'], function () {


    Route::get('/dashboard', function () {
        return view('backend.index');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/', function () {
        return view('backend.index');
    })->middleware(['auth', 'verified'])->name('index');

    Route::group(['middleware' => ['auth', 'verified']], function () {

        Route::group([
            'prefix' => 'newsletter',
            'as' => 'newsletter.',
            'middleware' => ['permission:newsletter.read']
        ], function () {
            Route::get('/',[NewsletterController::class, 'index'])->name('index');
            Route::get('/{newsletter}/show',[NewsletterController::class, 'show'])->name('show');


            Route::get('/create',[NewsletterController::class, 'create'])->middleware('can:newsletter.create')->name('create');
        });
    });
});
