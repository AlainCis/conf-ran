<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', [LoginController::class,"index"])->name('auth.login');
Route::post('/dologin', [LoginController::class,"doLogin"])->name('auth.dologin');
Route::get('/register', [LoginController::class,"register"])->name('auth.register');
Route::post('/doregister', [LoginController::class,"doRegister"])->name('auth.doregister');
Route::get('/conference.index', [ConferenceController::class,"index"])->name('conference.index');
Route::get('conference', [ConferenceController::class,"edit"])->name('conference.edit')->middleware("auth");
Route::post('conference', [ConferenceController::class,"store"])->name('conference.store')->middleware("auth");
Route::post('conference', [ConferenceController::class,"update"])->name('conference.update')->middleware("auth");
Route::resource('reservation', ReservationController::class);
Route::get('/reservation/{conference}/new', [ReservationController::class,'new'])->name('reservation.new')->middleware("auth");
Route::get('/reservation/{reservation}/valider', [ReservationController::class,'valider'])->name('reservation.valider')->middleware("auth");
Route::get('/reservation/{reservation}/annuler', [ReservationController::class,'annuler'])->name('reservation.annuler')->middleware("auth");
Route::get('conference', [ConferenceController::class,"create"])->name('conference.create');