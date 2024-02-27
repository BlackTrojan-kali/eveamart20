<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[controllers\homepage_controller::class,"index"])->name('homePage');
Route::get('/login',[controllers\authRegisterController::class,"login"])->name("login");
Route::get("/loginAdmin",[controllers\adminPanelController::class,"login"])->name("loginAdmin");
Route::post("/adminAuth",[controllers\adminPanelController::class,"AdminAuth"])->name("adminAuth");
Route::group(["middleware"=>"admin"],function(){
    Route::get('/admin/dashboard',[controllers\adminPanelController::class,"dashboardAdmin"])->name("dashboard");
    Route::get('/logoutAdmin',[controllers\adminPanelController::class,"logout"])->name("adminlogout");
    Route::get('/admin/profile',[controllers\adminPanelController::class,"profile"])->name("profile");
    Route::get('/admin/addAdmin',[controllers\adminPanelController::class,"adddAdmin"])->name("addAdmin");
});
Route::get('/signup',[controllers\authRegisterController::class,"register"]);
Route::post('/store',[controllers\authRegisterController::class,"store"])->name('register_store');
Route::post('/authenticate',[controllers\authRegisterController::class,"authenticate"])->name('authenticate');
Route::post('/logout',[controllers\authRegisterController::class,"logout"])->name('logout');
