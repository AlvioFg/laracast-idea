<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'tasks' => [
            'Ngerjain Tugas',
            'Main Game',
            'Tidur',
            'Nyari Uang'
        ]
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
