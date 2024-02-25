<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as controllers;;

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

Route::get('/',[controllers\homepage_controller::class,"index"]);
Route::get('/login',[controllers\authRegisterController::class,"login"]);

Route::get('/signup',[controllers\authRegisterController::class,"register"]);

