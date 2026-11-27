<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

//index
Route::get('/', function () {
    $ideas = Idea::all();

    return view('ideas.ideas', [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    Idea::create([
        'description' => request('idea'),
        'state' => 'pending',
    ]);

    return redirect('/');
});


//show
Route::get('/ideas/{idea}', function (Idea $idea) {


    return view('ideas.show', [
        'idea' => $idea,
    ]);
});


//edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {


    return view('ideas.show', [
        'idea' => $idea,
    ]);
});

Route::get('/delete-ideas', function () {
    Idea::truncate();

    return redirect('/');
});
