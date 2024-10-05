<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counters', [CounterController::class, 'index'])->name('counters.index');

Route::get('/forms/create', [FormController::class, 'create'])->name('forms.create');