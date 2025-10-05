<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/quickbookingmodal','Controller@index')->name('quickbookingmodal');
