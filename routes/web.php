<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SavingController;

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

Route::get('/', function() {
    return view('index');
});
Route::get('/users', function() {
    return view('users.index');
});

Route::get('/savings', [SavingController::class, 'index'])->name('savings.index');
Route::get('/savings/create', [SavingController::class, 'create'])->name('savings.create');
Route::post('/savings', [SavingController::class, 'store'])->name('savings.store');
