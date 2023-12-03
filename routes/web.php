<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\PromoteurController;
use App\Http\Controllers\TypeBienController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\FlareMiddleware\AddEnvironmentInformation;

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

Route::get('/', [BienController::class, 'show']);

Route::get('/detail_bien/{id}', [BienController::class, 'showDetails'])->name('bien.details');

Route::get('/biens/{id}', [BienController::class, 'show'])->name('biens.show');

Route::resource('type-biens', TypeBienController::class);
Route::resource('promoteurs', PromoteurController::class);
Route::resource('biens', BienController::class);
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
