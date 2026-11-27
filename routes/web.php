<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

//index
Route::get('/', function () {});


//create
Route::get('/ideas/create', function () {});

//store
Route::post('/ideas', function () {});


//show
Route::get('/ideas/{idea}', function (Idea $idea) {});


//edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
});

//update
Route::patch('/ideas/{idea}', function (Idea $idea) {});

//store


//destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {});


