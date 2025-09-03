<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
  $products = [
    ["name" => "Book","price" => 20, "id" => "1"],
    ["name" => "Pencil","price" => 5, "id" => "2"],
  ];

  return view('products.index', ["greeting" => "Selamat Datang!", "products" => $products]);
});

Route::get('/products/{id}', function ($id) {
  return view('products.show', ['id' => $id]);
});
