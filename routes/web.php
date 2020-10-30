<?php

use App\Http\Controllers\ProfilController;
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

Route::get('/', [ProfilController::class, 'index'])->name('about');

Route::get('/sav', [ProfilController::class, 'sav'])->name('sav');

Route::get('/partenariat', [ProfilController::class, 'partenariat'])->name('part');

Route::get('/info', [ProfilController::class, 'info'])->name('info');

Route::get('/frontend', [ProfilController::class, 'front'])->name('front');

Route::get('/backend', [ProfilController::class, 'back'])->name('back');
