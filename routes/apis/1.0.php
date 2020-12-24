<?php

use App\Http\Controllers\Web\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 |--------------------------------------------------------------------------
 | COUNTRIES
 |--------------------------------------------------------------------------
 |
 */
Route::apiResource('countries', 'CountryController');

/*
 |--------------------------------------------------------------------------
 | ROLES
 |--------------------------------------------------------------------------
 |
 */
Route::apiResource('roles', 'RoleController');
Route::apiResource('roles.permissions', 'RolePermissionController')
    ->only(['index', 'store']);

/*
 |--------------------------------------------------------------------------
 | PERMISSIONS
 |--------------------------------------------------------------------------
 |
 */
Route::apiResource('permissions', 'PermissionController');

/*
 |--------------------------------------------------------------------------
 | PROJECT
 |--------------------------------------------------------------------------
 |
 */
Route::apiResource('projects', 'ProjectController');
Route::patch('projects/{project}/online', [ProjectController::class, 'online']);
Route::patch('projects/{project}/paused', [ProjectController::class, 'paused']);
Route::apiResource('projects.members', 'MemberController')
    ->only(['index', 'store']);

Route::apiResource('members', 'MemberController')
    ->only(['update', 'destroy', 'show']);
