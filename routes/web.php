<?php

use Illuminate\Support\Facades\Route;

//Ruta de incio
Route::get('/', function () {
    return view('index');
})->name('index');

//Ruta de contacto 
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/privacidad', function () {
    return view('components.privacidad');
})->name('legal.privacidad');

Route::get('/legal', function () {
    return view('components.legal');
})->name('legal.aviso');

Route::get('/cookies', function () {
    return view('components.cookies');
})->name('legal.cookies');


