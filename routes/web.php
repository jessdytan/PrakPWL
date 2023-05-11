<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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


use App\Http\Controllers\MahasiswaController;

Route::get('/daftar_mahasiswa',[MahasiswaController::class,'index']);
// Route::post('/detail_mahasiswa',[MahasiswaController::class,'detail_mhs']);

Route::match(['get', 'post'], '/detail_mahasiswa',[MahasiswaController::class,'detail_mhs']);

use App\Http\Controllers\AdminController;
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/postingan',[AdminController::class,'show_postingan']);
Route::get('/admin/create_post',[AdminController::class,'create_post']);
Route::post('/admin/store_post',[AdminController::class,'store_post']);
Route::get('/admin/arsip',[AdminController::class,'show_arsip']);
Route::get('/admin/invoice',[AdminController::class,'show_invoice']);
Route::get('/admin/review',[AdminController::class,'show_review']);
Route::get('/admin/teams',[AdminController::class,'show_teams']);
Route::get('/admin/settings',[AdminController::class,'show_settings']);
Route::get('/admin/logout',[AdminController::class,'logout']);
