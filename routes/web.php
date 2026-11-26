<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $ideas = DB::table('ideas')->get();

    return $ideas;
});

Route::post('/ideas', function (){
    $idea = request('idea');

    session()->push('ideas', $idea);

    return redirect('/');
});

Route::get('/delete-ideas', function (){
    session()->forget('ideas');

    return redirect('/');
});
