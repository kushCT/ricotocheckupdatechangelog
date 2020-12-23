<?php

use App\Http\Controllers\Web\ProjectController;
use App\Http\Controllers\Web\UserController;
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

    // Projects route
    Route::resource('projects', ProjectController::class);

    // Users route
    Route::resource('user', UserController::class);

});
