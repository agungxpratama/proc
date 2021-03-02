<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/material', [App\Http\Controllers\MaterialController::class, 'index'])->name('material');
Route::get('/efmaterial', [App\Http\Controllers\MaterialController::class, 'efMat'])->name('efMaterial');
Route::get('/materialEfficiency', [App\Http\Controllers\MaterialController::class, 'materialEfficiency'])->name('materialEfficiency');
Route::get('/input', [App\Http\Controllers\MaterialController::class, 'inputMaterial'])->name('inputMaterial');


Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/efservice', [App\Http\Controllers\ServiceController::class, 'efSer'])->name('efService');
Route::get('/serviceEfficiency', [App\Http\Controllers\ServiceController::class, 'serviceEfficiency'])->name('serviceEfficiency');

Route::get('/ship', [App\Http\Controllers\ShipController::class, 'index'])->name('ship');
Route::get('/addShip', [App\Http\Controllers\ShipController::class, 'addShip'])->name('addShip');

Route::get('/compiled', [App\Http\Controllers\CompiledController::class, 'index'])->name('compiled');
