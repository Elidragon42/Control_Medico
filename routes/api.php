<?php

use App\Http\Controllers\LoginApiController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [LoginApiController::class, 'login']);