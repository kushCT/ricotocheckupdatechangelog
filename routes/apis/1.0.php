<?php

use Illuminate\Support\Facades\Route;

/*
 |--------------------------------------------------------------------------
 | ORGANIZATIONS
 |--------------------------------------------------------------------------
 |
 */
Route::apiResource('organization', 'OrganizationController');
Route::apiResource('organization.members', 'MemberController')
    ->only(['index', 'store']);

/*
 |--------------------------------------------------------------------------
 | MEMBERS
 |--------------------------------------------------------------------------
 |
 */
Route::apiResource('members', 'MemberController')
    ->only(['update', 'destroy', 'show']);
