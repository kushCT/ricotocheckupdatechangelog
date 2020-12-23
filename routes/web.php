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

Route::middleware(['auth', 'verified'])->group(function () {

    // Projects routes
    Route::group(['prefix' => 'projects'], function () {
        // index
        Route::get('/', function () {
            return view('projects.index');
        })->name('project.index');

        // create
        Route::get('new', function () {
            return view('projects.create');
        })->name('project.create');
    });

});
