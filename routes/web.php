<?php

use App\Http\Controllers\Web\ApplicationController;
use App\Http\Controllers\Web\ArchiveController;
use App\Http\Controllers\Web\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * SaaS admin
 */
Route::group(['as' => 'account.', 'middleware' => ['auth', 'verified']], function () {
    /**
     * Dashboard.
     */
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    /**
     * Archive routes.
     */
    Route::get('/archives', ArchiveController::class)->name('archives.index');

    /**
     * Application routes.
     */
    Route::get('/applications', [ApplicationController::class, 'index'])->name('apps.index');
    Route::get('/applications/create', [ApplicationController::class, 'create'])->name('apps.create');
    Route::get('/applications/{application}', [ApplicationController::class, 'show'])->name('apps.show');
});
