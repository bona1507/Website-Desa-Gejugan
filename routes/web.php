<?php

use App\Http\Controllers\UmkmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Auth::routes();
Route::match(['get', 'post'], 'register', function () {
    abort(404);
});

// Rute Dashboard Masyarakat
Route::get('/', function () {
    return view('Dashboard/main-dashboard');
});

Route::get('/form', function () {
    return view('Form/form');
});

Route::get('/profil-desa', function () {
    return view('Dashboard/profil-desa');
});

Route::get('/registrasi-umkm', function () {
    return view('Umkm/registrasi-umkm');
});

Route::get('/data-umkm', [UmkmController::class, 'indexHome']);

// Rute Dashboard Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('adminlte.index');
    });

    Route::get('/administrasi', function () {
        return view('adminlte.administrasi');
    });

    Route::get('/umkm', function () {
        return view('adminlte.umkm');
    });

    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/user', [UserController::class, 'index'])->name('adminlte.user');
    Route::get('/validasi', [FileController::class, 'validasi'])->name('validasi');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/administrasi', [FileController::class, 'index'])->name('adminlte.administrasi');
    Route::get('/dashboard', [FileController::class, 'count'])->name('adminlte.index');
    Route::patch('/administrasi/{id}/update-status', [FileController::class, 'updateStatus'])->name('file.updateStatus');
    Route::patch('/validasi/{id}/update-status', [FileController::class, 'tombolvalid'])->name('file.tombolvalid');
    Route::get('/umkm', [UmkmController::class, 'index'])->name('adminlte.umkm');
});

// // Rute Manipulasi Data Form
Route::get('/check-form', function () {
    return view('Form/check-form');
});

Route::get('/form', [FileController::class, 'create'])->name('form');
Route::get('/data-file', [FileController::class, 'index'])->name('data-file');
Route::post('/simpan-file', [FileController::class, 'store'])->name('simpan-file');
Route::view('Form/form-input', 'Form.form-input');

// Rute Manipulasi Data UMKM
Route::get('/detail-umkm/{id}', [UmkmController::class, 'detail']);
Route::post('/umkm/store', [UmkmController::class, 'store']);
Route::put('/umkm-accept/{id}', [UmkmController::class, 'accept']);

// Submit Administrasi
Route::post('/suratkematian', [FileController::class, 'kematian'])->name('form');
Route::post('/postsuratkematian', [FileController::class, 'storekematian']);
Route::get('/form-ticket', function () {
    return view('Form/form-ticket');
});
Route::post('/cek-tiket', [FileController::class, 'check']);
Route::get('/detail-ticket/{kode_tiket}', function () {
    return view('Form/detail-ticket');
})->name('detail_ticket');
Route::get('/check-form/{kode_tiket}', [FileController::class, 'detail'])->name('check_form');