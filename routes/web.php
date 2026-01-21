<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemostracionController;

Route::get('/', [DemostracionController::class, 'index']);
Route::get('/demostracion-poo', [DemostracionController::class, 'index']);
Route::get('/api/demostracion-poo', [DemostracionController::class, 'api']);