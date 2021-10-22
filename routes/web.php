<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\LoginController;



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
//Basic Routes
Route::get('/', [PagesController::class,'home'])->name('home');

Route::get('/contact/public',[PagesController::class,'contact'])->name('contact');
Route::get('/profile',[PagesController::class,'myprofile'])->name('profile');

//admin routes
Route::get('/admin/create',[AdminController::class,'create'])->name('admin.create');
Route::post('/admin/create',[AdminController::class,'createSubmit'])->name('admin.create');
Route::get('/admin/list',[AdminController::class,'list'])->name('admin.list');
Route::get('/admin/edit/{id}/{name}',[AdminController::class,'edit']);
Route::post('/admin/edit',[AdminController::class,'editSubmit'])->name('admin.edit');
Route::get('/admin/delete/{id}/{name}',[AdminController::class,'delete']);
//User routes
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user/create',[UserController::class,'createSubmit'])->name('user.create');
Route::get('/user/list',[UserController::class,'list'])->name('user.list');

//user details
Route::get('/user/details',[AdminController::class,'userDetails'])->name('user.details');

//details
Route::get('/details',[DetailController::class,'detailuser'])->name('user.details');


//login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//Admin dash
Route::get('/user/dash', [PagesController::class,'userdash'])->name('userdash')->middleware('ValidUser');