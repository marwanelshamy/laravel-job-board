<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexConrtoller extends Controller
{
    function index()
    {
        return view('index');
}
}