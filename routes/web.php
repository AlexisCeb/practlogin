<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\general;

Route::get('/', [general::class,'inicio']) ->name('inicio');
Route::get('/login', [general::class,'login']) ->name('login');
Route::post('/login', [general::class,'validar']) ->name('validar');
