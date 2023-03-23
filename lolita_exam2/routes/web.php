<?php

use Illuminate\Support\Facades\Route;

//import controller
use App\Http\Controllers\CharactersController;

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

Route::get('/', function () {
    return view('welcome');
}) -> name('welcome');

Route::get('/characters', [CharactersController::class, 'index']) -> name('characters');
Route::get('/characters_above', [CharactersController::class, 'index_above']) -> name('characters_above');
Route::get('/characters_eb', [CharactersController::class, 'index_eb']) -> name('characters_eb');