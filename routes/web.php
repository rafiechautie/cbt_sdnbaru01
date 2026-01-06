<?php

use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\AuthController;
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

// login page
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::prefix('admin/dashboard')->name('admin.')->group(function () {
        Route::resource('guru', GuruController::class)->except(['show']);
    });

    Route::get('/admin/dashboard/siswa', function () {
        return view('admin.siswa.index');
    })->name('admin.siswa.index');

    Route::get('/admin/dashboard/mapel', function () {
        return view('admin.mapel.index');
    })->name('admin.mapel.index');

    Route::get('/admin/dashboard/banksoal', function () {
        return view('admin.banksoal.index');
    })->name('admin.banksoal.index');

    Route::get('/admin/dashboard/jadwalujian', function () {
        return view('admin.jadwalujian.index');
    })->name('admin.jadwalujian.index');

    Route::get('/admin/dashboard/rekapnilai', function () {
        return view('admin.rekapnilai.index');
    })->name('admin.rekapnilai.index');
    
    Route::get('/guru/dashboard', function () {
        return view('guru.dashboard');
    })->name('guru.dashboard');

    Route::get('/siswa/dashboard', function () {
        return view('siswa.dashboard');
    })->name('siswa.dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});
