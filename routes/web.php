<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/',function(){
    return view('welcome');
    });
    

Route::get('tasks',[TaskController::class,'index']);
Route::post('store',[TaskController::class,'store']);
Route::post('delete/{id}',[TaskController::class,'delete']);
Route::post('update/{id}',[TaskController::class,'update']);