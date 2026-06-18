<?php

use Illuminate\Support\Facades\Route;

//Ruta de incio
Route::get('/', function () {
    return view('index');
})->name('index');

//Rutas de productos.
Route::get('/filtracion', function () {
    $products = collect(config('products'))
        ->filter(fn (array $product) => $product['category'] === 'filtracion')
        ->all();

    return view('productosFiltracion', ['products' => $products]);
})->name('filtracion');

Route::get('/separacion', function () {
    $products = collect(config('products'))
        ->filter(fn (array $product) => $product['category'] === 'separacion')
        ->all();

    return view('productosSeparacion', ['products' => $products]);
})->name('separacion');

//Luego aqui una pagina interna para cada producto, Con su descripción.
Route::get('/producto/{slug}', function (string $slug) {
    $products = config('products');

    abort_unless(isset($products[$slug]), 404);

    $product = $products[$slug];

    return view('paginasDeCadaProducto.productoDescripcion', [
        'slug' => $slug,
        'product' => $product,
    ]);
})->name('producto.show');


//Ruta de contacto 
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');





//Rutas legal
Route::get('/privacidad', function () {
    return view('components.privacidad');
})->name('legal.privacidad');

Route::get('/legal', function () {
    return view('components.legal');
})->name('legal.aviso');

Route::get('/cookies', function () {
    return view('components.cookies');
})->name('legal.cookies');


