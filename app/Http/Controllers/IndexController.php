<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('job.index');
    }

    public function about()
    {
        return view('job.about' , ["pageTitle" => 'About page']);
    }

    public function contact()
    {
        return view('job.contact' , ["pageTitle" => 'Contact page']);
    }
}

