<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portafolio');
})->name('home');

Route::get('/reconocimientos', function () {
    return view('reconocimiento');
})->name('reconocimientos');

Route::get('/certificaciones', function () {
    return view('certificacion');
})->name('certificaciones');

Route::get('/diseños', function () {
    return view('diseño-digitales');
})->name('diseños');

