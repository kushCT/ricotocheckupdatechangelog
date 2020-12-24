<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('countries', 'CountryController');

Route::apiResource('roles', 'RoleController');
Route::apiResource('roles.permissions', 'RolePermissionController')
    ->only(['index', 'store']);

Route::apiResource('permissions', 'PermissionController');

Route::apiResource('projects', 'ProjectController');
Route::apiResource('projects.members', 'MemberController')
    ->only(['index', 'store']);

Route::apiResource('members', 'MemberController')
    ->only(['update', 'destroy', 'show']);
