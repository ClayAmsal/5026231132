<?php

use Illuminate\Support\Facades\Route;

// import java.io;

//System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('ets', function () {
	return view('index');
});

Route::get('gridcontainer', function () {
	return view('gridcontainer');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('pseudo-element', function () {
	return view('pseudo-element');
});

Route::get('soallatihan5', function () {
	return view('soallatihan5');
});

Route::get('validasi1', function () {
	return view('validasi1');
});
