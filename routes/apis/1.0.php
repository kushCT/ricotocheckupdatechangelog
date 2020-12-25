<?php

use Illuminate\Support\Facades\Route;

/*
 |--------------------------------------------------------------------------
 | ORGANIZATIONS
 |--------------------------------------------------------------------------
 |
 */
Route::apiResource('organizations', 'OrganizationController');
Route::apiResource('organizations.members', 'MemberController')
    ->only(['index', 'store']);

/*
 |--------------------------------------------------------------------------
 | MEMBERS
 |--------------------------------------------------------------------------
 |
 */
Route::apiResource('members', 'MemberController')
    ->only(['update', 'destroy', 'show']);
