<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/',[TaskController::class,'index']);
Route::post('/store',[TaskController::class,'store']);
Route::post('delete/{id}',[Taskcontroller::class,'delete']);




