<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FormaturController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'auth'], function () {
	Route::get('/admin/formatur/index', [FormaturController::class, 'index'])->name('formatur.index');
    Route::get('/admin/formatur/detail/{id}', [FormaturController::class, 'detail'])->name('formatur.detail');
    Route::post('/admin/formatur/tambah', [FormaturController::class, 'create'])->name('formatur.tambah');
    Route::post('/admin/formatur/update/{id}', [FormaturController::class, 'update'])->name('formatur.update');
    Route::post('/admin/formatur/hapus/{id}', [FormaturController::class, 'destroy'])->name('formatur.hapus');

    Route::post('/formatur/import', [FormaturController::class, 'import'])->name('formatur.import');

    Route::get('/admin/pemilih/index', [PemilihController::class, 'index'])->name('pemilih.index');
    Route::get('/admin/pemilih/detail/{id}', [PemilihController::class, 'detail'])->name('pemilih.detail');
    Route::post('/admin/pemilih/tambah', [PemilihController::class, 'create'])->name('pemilih.tambah');
    Route::post('/admin/pemilih/hapus/{id}', [PemilihController::class, 'destroy'])->name('pemilih.hapus');
    Route::get('/admin/pemilih/export', [PemilihController::class, 'export'])->name('pemilih.export');
    Route::get('/admin/pemilih/active', [PemilihController::class, 'active'])->name('active');
    Route::get('/admin/pemilih/non-active', [PemilihController::class, 'nonActive'])->name('non-active');

    Route::post('/pemilih/import', [PemilihController::class, 'import'])->name('pemilih.import');



    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy'])->name('logout');
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

// Guest IPM
Route::get('/guest/ipm', [GuestController::class, 'ipm'])->name('guest.index');
Route::post('/guest/pilih/ipm', [GuestController::class, 'pilihipm'])->name('guest.pilih.ipm');

// Guest HW
Route::get('/guest/hw', [GuestController::class, 'hw'])->name('guest.hw');
Route::post('/guest/pilih/hw', [GuestController::class, 'pilihhw'])->name('guest.pilih.hw');

// Guest TS
Route::get('/guest/ts', [GuestController::class, 'ts'])->name('guest.ts');
Route::post('/guest/pilih/ts', [GuestController::class, 'pilihts'])->name('guest.pilih.ts');

// Hangker Profile
Route::get('/hangker', function () {
    return view('hangker');
})->name('hangker');

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');