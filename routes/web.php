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
    // Organizations route
    Route::resource('organizations', 'OrganizationController')->except('show');
    Route::get('organizations/{slug}/applications', 'AppController@index');
    Route::get('organizations/{slug}/members', 'MemberController@index');

    // Apps route
    Route::resource('applications', 'AppController')->except('index');

    // Members route
    Route::resource('members', 'MemberController')->except('index');;

    // Users route
    Route::resource('user', 'UserController');

    // Switch organization.
    Route::put('/current-organization', 'SwitchOrganizationController@update')
        ->name('current-team.update');
});
