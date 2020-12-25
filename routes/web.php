<?php

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
});

Route::group(['as' => 'account.', 'middleware' => ['auth', 'verified']], function () {
    /**
     * Organizations routes
     *
     * showing organization applications and
     * members.
     */
    Route::resource('organizations', 'OrganizationController')
        ->except('show');

    Route::get('organizations/{slug}/applications', 'OrganizationApplicationController@index')
        ->name('applications.index');

    Route::get('organizations/{slug}/members', 'OrganizationMemberController@index')
        ->name('members.index');

    Route::get('organizations/{slug}/settings', 'OrganizationSettingController@index')
        ->name('settings.index');

    /**
     * Application routes without index.
     */
    Route::resource('applications', 'ApplicationController')
        ->except('index');

    /**
     * Member routes without index.
     */
    Route::resource('members', 'MemberController')
        ->except('index');

    /**
     * Switch organization.
     */
    Route::put('/current-organization', 'SwitchOrganizationController@update')
        ->name('current-team.update');
});
