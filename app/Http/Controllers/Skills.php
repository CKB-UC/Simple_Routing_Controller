<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Skills extends Controller
{
    public function index()
    {
        return view('about', [
            'aboutData' => 'Good at Cooking, Fundamentals of Programming Languages'
        ]);
    }
}
