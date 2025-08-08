<?php

use App\Http\Controllers\IndexConrtoller;
use App\Http\Controllers\JobControler;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexConrtoller::class, 'index' ]);

Route::get('/job',[JobControler::class,'index']);