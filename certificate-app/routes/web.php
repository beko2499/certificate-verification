<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertificateController;
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/certificate/{id}/pdf', [CertificateController::class, 'downloadPDF'])->name('certificate.pdf');

Route::get('/', function () {
    return view('verify');
});

Route::post('/verify', [CertificateController::class, 'verify'])->name('verify');
