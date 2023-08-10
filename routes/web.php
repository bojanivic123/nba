<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TeamsController::class, 'index']);

Route::get('/teams/{id}', [TeamsController::class, 'show'])->middleware('isAuth');

Route::get('/players/{id}', [PlayersController::class, 'show'])->middleware('isAuth');

Route::get('/register', [AuthController::class, 'showRegisterPage'])->middleware('notAuth');
Route::post('/register', [AuthController::class, 'register'])->middleware('notAuth');

Route::get('/login', [AuthController::class, 'showLoginPage'])->middleware('notAuth');
Route::post('/login', [AuthController::class, 'login'])->middleware('notAuth');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('isAuth');

Route::post('/createcomment', [CommentsController::class, 'store'])
    ->middleware('isAuth')
    ->middleware('isComment');

Route::get('/verify_mail/{id}', [AuthController::class, 'verify']);
