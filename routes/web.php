<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    return view('layouts.master');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/addUser', function () {
    // return view('auth.login');
    $user = User::create([
        'name' => 'Fajar',
        'email' => 'fajar@example.com',
        'email_verified_at' => now(),
        'password' => bcrypt('fajar'), // Anda bisa mengganti ini dengan nilai yang sesuai
        'role' => 'mahasiswa', // Nilai ini bisa disesuaikan dengan kolom role Anda
        'remember_token' => Str::random(10),
    ]);
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');


Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
        Route::get('/dosen-master', [DosenController::class, 'index'])->name('dosen-master');
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
    Route::group(['middleware' => ['cek_login:mahasiswa']], function () {
        Route::resource('user', UserController::class);
    });
});
