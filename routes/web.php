<?php

use App\Http\Controllers\TodolistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TodolistController::class, 'index']);
Route::get('/create', [TodolistController::class, 'create']);
Route::post('/store', [TodolistController::class, 'store']);
Route::get('/edit/{todolist_id}', [TodolistController::class, 'edit']);
Route::get('/delete/{id}', [TodolistController::class, 'delete']);
