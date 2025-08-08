<?php

use App\Http\Controllers\JobControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job',[JobControler::class,'index']);