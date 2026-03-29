<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);
Route::get('/add', [TaskController::class, 'add']);
Route::post('/add', [TaskController::class, 'store']);
Route::get('/delete/{id}', [TaskController::class, 'delete']);
Route::get('/edit/{id}', [TaskController::class, 'edit']);
Route::post('/edit/{id}', [TaskController::class, 'modify']);

