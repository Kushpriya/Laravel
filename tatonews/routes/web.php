<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   $obj = new NewsController();
   return $obj->index();
});

Route::get('/', [NewsController::class,'index']);

Route::get('/news/{id}',[NewsController::class,'displayNews']);
