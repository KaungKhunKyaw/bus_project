<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StopController;
use App\Http\Controllers\TownController;

Route::get('/buses', [BusController::class, 'index'])->name('buses.index');
Route::get('/buses/{bus}', [BusController::class, 'show'])->name('buses.show');

Route::get('/buses/{bus}/routes', [RouteController::class, 'index'])->name('routes.index');
Route::get('/routes/{route}', [RouteController::class, 'show'])->name('routes.show');

Route::get('/routes/{route}/stops', [StopController::class, 'index'])->name('stops.index');

Route::get('/towns', [TownController::class, 'index'])->name('towns.index');
Route::get('/towns/{town}', [TownController::class, 'show'])->name('towns.show');