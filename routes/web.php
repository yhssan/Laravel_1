<?php

use App\Http\Controllers\UserController;
use App\http\controllers\DestinasiController;
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

// /Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard',[UserController::class,'dashboard']);
Route::get('/detail/{id}', [DestinasiController::class, 'show']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/home', [UserController::class, 'home']);
Route::get('/form', [UserController::class, 'form']);
Route::get('/', [DestinasiController::class, 'index']);
