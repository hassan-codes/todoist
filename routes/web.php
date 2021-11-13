<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoItemController;

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

Route::get('/', [TodoItemController::class, 'index']);

Route::post('/saveTodo', [TodoItemController::class, 'saveTodo'])->name('saveTodo');

Route::post('/completeTodo/{id}', [TodoItemController::class, 'completeTodo'])->name('completeTodo');