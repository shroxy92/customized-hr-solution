<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
      return redirect()->route('demo');
});

Route::get('/demo', function () {
    return view('dashboard');
})->name('demo');
