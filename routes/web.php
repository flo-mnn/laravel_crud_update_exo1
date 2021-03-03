<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', [AnimalController::class, 'index']);
Route::get('/animal/create', [AnimalController::class, 'create']);
Route::post('/animal/add', [AnimalController::class, 'store']);
Route::get('/animal/show/{id}', [AnimalController::class, 'show']);
Route::post('/animal/delete/{id}', [AnimalController::class, 'destroy']);
Route::get('/animal/edit/{id}', [AnimalController::class, 'edit']);
Route::post('/animal/update/{id}', [AnimalController::class, 'update']);
Route::post('/animal/download/{animal}', [AnimalController::class, 'download']);
