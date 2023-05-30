<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GeneralController;

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


Route::get('/', function(){
    return view('welcome');
})->middleware('guest');

Route::get('/login', [AuthenticationController::class, 'login'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthenticationController::class, 'userLogin']);
Route::post('/auth/logout', [AuthenticationController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [GeneralController::class, 'dashboard'])->middleware('auth');

Route::get('/pegawai' ,[EmployeeController::class, 'index'] )->name('pegawai')->middleware('auth');
Route::get('/tambahpegawai' ,[EmployeeController::class, 'tambahpegawai'] )->name('tambahpegawai')->middleware('auth');
Route::post('/insertdata' ,[EmployeeController::class, 'insertdata'] )->name('insertdata')->middleware('auth');

Route::get('/tampilkandata/{id}' ,[EmployeeController::class, 'tampilkandata'] )->name('tampilkandata')->middleware('auth');
Route::post('/updatedata/{id}' ,[EmployeeController::class, 'updatedata'] )->name('updatedata')->middleware('auth');
Route::get('/delete/{id}' ,[EmployeeController::class, 'delete'] )->name('delete')->middleware('auth');

Route::resource('/admin', AdminController::class)->middleware('auth');
