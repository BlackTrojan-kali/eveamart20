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
Route::get("/loginAdmin",[controllers\adminPanelController::class,"login"])->name("loginAdmin")->middleware("guest");
Route::post("/adminAuth",[controllers\adminPanelController::class,"AdminAuth"])->name("adminAuth");
Route::group(["middleware"=>"admin"],function(){
    Route::get('/admin/dashboard',[controllers\adminPanelController::class,"dashboardAdmin"])->name("dashboard");
    Route::post('/admin/logoutAdmin',[controllers\adminPanelController::class,"logout"])->name("adminlogout");
    Route::get('/admin/blogs',[controllers\BlogController::class,"index"])->name("AdminBlogs");
    Route::get('/admin/blogs/{id}',[controllers\BlogController::class,"UpdateBlog"])->name("UpdateBlog");
    Route::get('/admin/createBlogs',[controllers\BlogController::class,"create"])->name("CreateBlogs");
    Route::post('/admin/blogs/{id}',[controllers\BlogController::class,"Update"])->name("UpdateTheBlog");
    Route::post('/admin/createB',[controllers\BlogController::class,"createBlog"])->name("PostBlog");
    Route::delete('/admin/DeleteB/{id}',[controllers\BlogController::class,"Delete"])->name("DeleteBlog");
    Route::group(["middleware"=>"superAdmin"],function(){
        Route::get('/admin/marts',[controllers\MartController::class,"index"])->name("AdminMart");
        Route::get('/admin/createMarts',[controllers\MartController::class,"createMart"])->name("CreateMarts");
        Route::post('/admin/createM',[controllers\MartController::class,"create"])->name("PostMart");
        Route::get('/admin/mart/{id}',[controllers\MartController::class,"UpdateMart"])->name("UpdateMart");
        Route::get('/admin/martManage/{id}',[controllers\MartController::class,"show"])->name("ManageMart");
        Route::get('/admin/martManageAssign/{id}',[controllers\MartController::class,"assign"])->name("AssignMart");
        Route::post('/admin/martManageAssign/{id}/{idMart}',[controllers\MartController::class,"AssignAdmin"])->name("AssignAdmin");
        Route::delete('/admin/martManageDelAssign/{id}/{idMart}',[controllers\MartController::class,"deleteAssignAdmin"])->name("UnAssignAdmin");
        Route::post('/admin/mart/{id}',[controllers\MartController::class,"Update"])->name("UpdateTheMart");
        Route::delete('/admin/delMart/{id}',[controllers\MartController::class,"destroy"])->name("deleteeMart");
        Route::get('/admin/Categories',[controllers\CategoryController::class,"index"])->name("ManageCategory");
        Route::post('/admin/Categories',[controllers\CategoryController::class,"createCategory"])->name("AddCategory");
        Route::get('/admin/Categories/{id}',[controllers\CategoryController::class,"update"])->name("UpdateCategory");
        Route::delete('/admin/delCategories/{id}',[controllers\CategoryController::class,"destroy"])->name("deleteCategory");
        Route::post('/admin/UCategories/{id}',[controllers\CategoryController::class,"updateCategory"])->name("UpCategory");
        Route::get('/admin/CreateProduct/{id}',[controllers\ProductController::class,"createProducts"])->name("CreateProduct");
        Route::get('/admin/UpdateProduct/{id}/{idMart}/{idCat}',[controllers\ProductController::class,"updateProduct"])->name("UpdateProduct");
        Route::post('/admin/CreateProducts',[controllers\ProductController::class,"create"])->name("PostProduct");
        Route::post('/admin/UpdateProduct/{id}',[controllers\ProductController::class,"update"])->name("UpProduct");
        Route::delete('/admin/deleteProduct/{id}',[controllers\ProductController::class,"destroy"])->name("DelProduct");
        Route::get('/admin/addAdmin',[controllers\adminPanelController::class,"addAdmin"])->name("addAdmin");
        Route::post('/admin/uploadAdmin',[controllers\adminPanelController::class,"registerAdmin"])->name("PostAdmin");
        Route::get('/admin/EditAdmin/{id}',[controllers\adminPanelController::class,"EditAdmin"])->name("EditAdmin");
        Route::delete('/admin/deleteAdmin/{id}',[controllers\adminPanelController::class,"destroy"])->name("deleteAdmin");
    });
    Route::get('/admin/GuestAdminMart/',[controllers\adminPanelController::class,"showMarts"])->name("ShowMarts");
    Route::get('/admin/Gmart/{id}',[controllers\MartController::class,"UpdateGuestMart"])->name("UpdateGuestMart");
    Route::get('/admin/marGtManage/{id}',[controllers\MartController::class,"show"])->name("ManageGuestMart");
    Route::get('/admin/profile',[controllers\adminPanelController::class,"profile"])->name("profile");
});
Route::get('/signup',[controllers\authRegisterController::class,"register"]);
Route::post('/store',[controllers\authRegisterController::class,"store"])->name('register_store');
Route::post('/authenticate',[controllers\authRegisterController::class,"authenticate"])->name('authenticate');
Route::post('/logout',[controllers\authRegisterController::class,"logout"])->name('logout');
