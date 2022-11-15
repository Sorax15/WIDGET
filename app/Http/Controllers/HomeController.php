<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $theme = 'toyota';

    public function index()
    {
        return view('pages.welcome', ['theme' => $this->theme]);
    }
}
