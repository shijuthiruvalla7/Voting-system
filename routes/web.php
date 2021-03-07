<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\votingController;




Route::get('/', [votingController::class,'home']);

Route::post('/signup', [votingController::class,'register']);

Route::post('/login', [votingController::class,'login']);


