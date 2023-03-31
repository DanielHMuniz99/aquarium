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

Route::post('/calculate', [AquariumController::class, 'calculate'])->name('calculate');
Route::post('/fishpopulation/{liters}', [AquariumController::class, 'fishPopulation'])->name('fishPopulation');
Route::post('/fauna', [AquariumController::class, 'fauna'])->name('fauna');


Route::get("/fauna", function(){
    return \View::make("fauna");
});

Route::get("/", function(){
    return \View::make("body");
});