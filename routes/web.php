<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\RefereeController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\PeoplesController;

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

Route::get('/', [MainController::class, 'index'])
    ->name('home');
Route::get('/club/{id}', [ClubController::class, 'view'])
    ->name('view_club');

Route::get('/create_tournament', [RefereeController::class, 'create_tournament'])
    ->name('create_tournament');
Route::get('/view_tournament/{id}', [TournamentController::class, 'view_tournament'])
    ->name('view_tournament');

/*ajax*/
Route::get('/get_people', [PeoplesController::class, 'get_people'])
    ->name('get_people');
