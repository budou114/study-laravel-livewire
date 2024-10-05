<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CounterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counters', [CounterController::class, 'index'])->name('counters.index');