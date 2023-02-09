<?php

use App\Http\Controllers\home;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\NewsController;
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

Route::get('/home', [home::class, 'index']);
Route::get('/home/admin', [home::class, 'admin']);
Route::resource('/home/admin/projects', ProjectsController::class);
Route::resource('/home/admin/news', NewsController::class);
