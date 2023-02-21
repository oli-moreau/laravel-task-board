<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [UserController::class, 'index'])->name('home');

Route::post('/home/board', [BoardController::class, 'add'])->name('board.add');
Route::delete('/home/board/{board}', [BoardController::class, 'remove'])->name('board.remove');

Route::post('/board/{board}/tasks', [TaskController::class, 'add'])->name('task.add');
Route::delete('/home/task/{task}', [TaskController::class, 'remove'])->name('task.remove');
