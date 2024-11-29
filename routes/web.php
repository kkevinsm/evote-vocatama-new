<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FormaturController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\VoterController;
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
	Route::get('/admin/candidate/index', [CandidateController::class, 'index'])->name('candidate.index');
	Route::get('/admin/candidate/detail/{id}', [CandidateController::class, 'detail'])->name('candidate.detail');
	Route::post('/admin/candidate/tambah', [CandidateController::class, 'create'])->name('candidate.tambah');
	Route::post('/admin/candidate/update/{id}', [CandidateController::class, 'update'])->name('candidate.update');
	Route::post('/admin/candidate/hapus/{id}', [CandidateController::class, 'destroy'])->name('candidate.hapus');
	Route::post('/formatur/import', [CandidateController::class, 'import'])->name('formatur.import');

	Route::get('/admin/voters/index', [VoterController::class, 'index'])->name('voters.index');
	Route::get('/admin/voters/detail/{id}', [VoterController::class, 'detail'])->name('voters.detail');
	Route::post('/admin/voters/create', [VoterController::class, 'create'])->name('voters.create');
	Route::post('/admin/voters/hapus/{id}', [VoterController::class, 'destroy'])->name('voters.hapus');
	Route::get('/admin/voters/export', [VoterController::class, 'export'])->name('voters.export');
	Route::get('/admin/voters/active', [VoterController::class, 'active'])->name('active');
	Route::get('/admin/voters/non-active', [VoterController::class, 'nonActive'])->name('non-active');
	Route::post('/voters/import', [VoterController::class, 'import'])->name('voters.import');

	Route::get('/admin/role/index', [RoleController::class, 'index'])->name('role.index');

	Route::get('/admin/profile/index', [VoterController::class, 'index'])->name('profile.index');



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

// Guest Terimakasih 
Route::get('/guest/terimakasih', [GuestController::class, 'terimakasih'])->name('terimakasih');

// Hangker Profile
Route::get('/hangker', function () {
	return view('hangker');
})->name('hangker');

Route::get('/login', function () {
	return view('session/login-session');
})->name('login');
