<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $news = [
        'petrol price drop',
        'ieocmkmoi'
    ];
    $title = "basi khabar";
    $is_expired = true;
    return view('welcome',[
        'title'=> $title,
        'news'=> $news,
        'is_expired'=> $is_expired
    ]);
});


Route::get('/news/{id}', function ($id) {
    return response($id);
});