<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UseController;
use App\Http\Controllers\HomeController;

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

Route::get('/a', [UseController::class, 'blade']);
Route::get('/dbz', [UseController::class, 'dbz']);
Route::get('/', [UseController::class, 'clients']);
Route::get('/photo', [UseController::class, 'photo']);


