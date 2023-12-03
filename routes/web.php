<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::view('/', 'split-bill.login');
Route::view('/login', 'split-bill.login');
Route::view('/register', 'split-bill.signup');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
    Route::get('/admin-edit-user', [AdminController::class, 'editUser'])->name('admin-edit-user');
});

Route::view('/create', 'split-bill.hitung_bill');
Route::get('/create', [BillController::class, 'create'])->name('create');
Route::post('/create', [BillController::class, 'store'])->name('store');

Route::view('/add-member', 'split-bill.addmember');
Route::view('/edit-member', 'split-bill.editmember');
Route::get('/edit-member', [BillController::class, 'editMember']);

Route::view('/bill', 'split-bill.calculate');
Route::get('/bill', [BillController::class, 'calculate']);

Route::view('/history', 'split-bill.bill_history');
Route::view('/profile', 'split-bill.profile');
Route::view('/edit-profile', 'split-bill.editprofile');
Route::view('/admin-dashboard', 'split-bill.admin-tabel');
Route::view('/admin-edit-user', 'split-bill.admin-edituser');