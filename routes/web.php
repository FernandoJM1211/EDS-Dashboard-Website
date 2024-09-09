<?php

use App\Http\Controllers\DataController;
use App\Models\Data;
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

Route::get('/data', [DataController::class, 'index'])->name('data.index');
Route::post('/data', [DataController::class, 'filterData']);
Route::get('/data/filterNext', [DataController::class, 'filterData'])->name('data.filterNext');

Route::get('/data/filterPrevious', [DataController::class, 'filterData'])->name('data.filterPrevious');

Route::post('/reset-session', [DataController::class, 'resetSession'])->name('reset.session');

Route::get('/', function () {
    return view('index');
});

Route::get('/dash', function () {
    return view('dash');
});

Route::get('/tanggal', function () {
    return view('tanggal');
});

Route::get('/status', function () {
    return view('status');
});

Route::get('/sektor', function () {
    return view('sektor');
});

Route::get('/pivot', function () {
    return view('pivot');
});

Route::get('/coba', [DataController::class, 'indexStatus']);
