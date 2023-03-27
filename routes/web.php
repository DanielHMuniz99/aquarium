<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AquariumController;
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

Route::get('/', [AquariumController::class, 'index'])->name('index');

Route::post('/calculate', [AquariumController::class, 'calculate'])->name('calculate');
Route::post('/fishpopulation/{liters}', [AquariumController::class, 'fishPopulation'])->name('fishPopulation');
Route::get('/fauna', [AquariumController::class, 'loadFauna'])->name('loadFauna');
Route::post('/fauna', [AquariumController::class, 'fauna'])->name('fauna');