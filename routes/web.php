<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class,'welcome'])->name('welcome');

Route::get('/contact-us',[PublicController::class,'contact_us'])->name('contact_us');

Route::post('/contact/invio',[PublicController::class,'invio'])->name('invio_mail');
