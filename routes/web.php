<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/',[TaskController::class,'index']);
Route::post('/store',[TaskController::class,'store']);
Route::delete('delete/{id}',[Taskcontroller::class,'delete']);
Route::get('update/{id}',[Taskcontroller::class,'update']);
Route::post('Edit/{id}',[Taskcontroller::class,'Edit']);




