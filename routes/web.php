<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Rotas criadas com base na documentação
//https://laravel.com/docs/10.x/controllers#actions-handled-by-resource-controller

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::get('/users/{user}',[UserController::class,'show'])->name('users.show');
Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('/users/{user}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');
