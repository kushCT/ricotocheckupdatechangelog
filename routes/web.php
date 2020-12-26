<?php

use App\Http\Livewire\Apps\AppIndex;
use App\Http\Livewire\Apps\AppShow;
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
    // Apps routes
    Route::get('/apps', AppIndex::class)
        ->name('app.index');

    Route::get('/apps/{slug}', AppShow::class)
        ->name('app.show');
});
