<?php

use App\Http\Controllers\Web\AnalyticController;
use App\Http\Controllers\Web\ApplicationController;
use App\Http\Controllers\Web\ArchiveController;
use App\Http\Controllers\Web\ClientController;
use App\Http\Controllers\Web\CollaboratorController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\NotificationController;
use App\Http\Controllers\Web\SettingController;

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
     * Analytics routes.
     */
    Route::get('/analytics', [AnalyticController::class, 'index'])->name('analytics.index');
    Route::get('/applications/{application}/analytics', [AnalyticController::class, 'show'])->name('analytics.show');

    /**
     * Notifications routes.
     */
    Route::get('/notifications', NotificationController::class)->name('notifications.index');

    /**
     * Settings routes.
     */
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::get('/applications/{application}/settings', [SettingController::class, 'show'])->name('settings.show');

    /**
     * Application detail
     */
    Route::get('/applications/{application}/collaborators', [CollaboratorController::class, 'show'])->name('collaborators.show');
    Route::get('/applications/{application}/clients', [ClientController::class, 'show'])->name('clients.show');

    /**
     * Application routes.
     */
    Route::get('/applications', [ApplicationController::class, 'index'])->name('apps.index');
    Route::get('/applications/create', [ApplicationController::class, 'create'])->name('apps.create');
    Route::get('/applications/{application}', [ApplicationController::class, 'show'])->name('apps.show');
});
