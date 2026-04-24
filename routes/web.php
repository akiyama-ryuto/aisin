<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/version-check', function () {
    return [
        'laravel' => app()->version(),
        'php' => phpversion(),
    ];
});
