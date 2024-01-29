<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::delete('/{id}',[UserController::class,'delete']);
Route::patch('/{id}',[UserController::class,'update']);
Route::get('/{id}',[UserController::class,'findById']);
Route::get('/',[UserController::class,'index']);
Route::post('/',[UserController::class,'create']);


