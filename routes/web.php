<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SplitBillController;

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
    return view('split-bill.login');
});

Route::get('/login', function () {
    return view('split-bill.login');
});

Route::get('/register', function () {
    return view('split-bill.signup');
});

Route::get('/create', function () {
    return view('split-bill.hitung_bill');
});

Route::get('/add-member', function () {
    return view('split-bill.addmember');
});

Route::get('/edit-member', function () {
    return view('split-bill.editmember');
});

Route::get('/bill', function () {
    return view('split-bill.calculate');
});

Route::get('/history', function () {
    return view('split-bill.bill_history');
});

Route::get('/profile', function () {
    return view('split-bill.profile');
});

Route::get('/edit-profile', function () {
    return view('split-bill.editprofile');
});

Route::get('/admin-dashboard', function () {
    return view('split-bill.admin-tabel');
});

Route::get('/admin-edit-user', function () {
    return view('split-bill.admin-edituser');
});