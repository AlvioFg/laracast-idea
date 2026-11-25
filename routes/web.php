<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = session()->get('ideas');

    return view('ideas', [
        'ideas' => $ideas,
        ]);
});

Route::post('/ideas', function (Request $request){
    $request->session()->put('ideas', $request->input());

    return redirect('/');
});
