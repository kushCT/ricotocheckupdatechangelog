<?php

use Illuminate\Support\Facades\Route;

/*
 * API V 1.0 route declaration.
 */
Route::namespace('V1')
    ->prefix('1.0')
    ->group(base_path('routes/apis/1.0.php'));
