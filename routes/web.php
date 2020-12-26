<?php

use App\Http\Controllers\Web\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * SaaS admin
 */
Route::group(['as' => 'account.', 'middleware' => ['auth', 'verified']], function () {
    /**
     * Application routes.
     */
    Route::get('/apps', [ApplicationController::class, 'index'])->name('apps.index');
    Route::get('/apps/create', [ApplicationController::class, 'create'])->name('apps.create');
    Route::get('/apps/{application}', [ApplicationController::class, 'show'])->name('apps.show');
});
