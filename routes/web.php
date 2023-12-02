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
    return view('login');
});


Route::get('/split-bill/create', [SplitBillController::class, 'create'])->name('split-bill.create');
Route::post('/split-bill/store', [SplitBillController::class, 'store'])->name('split-bill.store');
