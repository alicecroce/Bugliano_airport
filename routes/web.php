<?php

use App\Http\Controllers\pageCotroller;
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



Route::get('/', [pageCotroller::class, 'homepage'])->name('hompage');
Route::get('/voli', [pageCotroller::class, 'insideFlights'])->name('voli');
//Route::get('/voli/{id}', [pageCotroller::class, 'voli'])->name('dettagliovolo'); //pagina che recupera l'id
Route::get('/dettagliovolo/{id}', [pageCotroller::class, 'voli'])->name('dettagliovolo');//nuova pagina con i dettagli del volo
