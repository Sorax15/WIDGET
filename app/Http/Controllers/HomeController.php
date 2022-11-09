<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $themes = 'toyota';

        return view('pages.welcome', ['theme' => $themes]);
    }
}
