<?php

use App\Http\Controllers\PostController;
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

// min 1:40

Route::get('/', [PostController::class, 'index']);

Route::get('/details/{post}', [PostController::class, 'details']);

Route::get('/edit/{post}', [PostController::class, 'edition']);

Route::post('/edit/{post}', [PostController::class, 'updater']);