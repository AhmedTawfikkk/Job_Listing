<?php

use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

Route::get('/', [JobController::class,'index']);

Route::get('/jobs/create',[JobController::class,'create'])->middleware('auth');
Route::post('/jobs',[JobController::class,'store'])->middleware('auth');

Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}',TagController::class);   //give me all the jobs associated with this tag

Route::middleware('guest')->group(function(){
Route::get('/register',[RegisterUserController::class,'create']);
Route::post('/register',[RegisterUserController::class,'store']);
Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);

});

Route::delete('/logout',[SessionController::class,'destroy'])->middleware('auth');