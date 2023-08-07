<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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
});
Route::get('/register',[AdminController::class, 'index']);
Route::post('/register',[AdminController::class,'store']);

Route::get('/category', [CategoryController::class,'index']);
Route::post('/category', [CategoryController::class,'store']);

Route::view('/post', 'admin.post');