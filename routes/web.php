<?php

use App\Http\Controllers\BienController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/detail_bien', function () {
    return view('detail_bien');
});

Route::get('/biens', [BienController::class, 'index'])->name('biens.index');
Route::get('/biens/{id}', [BienController::class, 'show'])->name('biens.show');
