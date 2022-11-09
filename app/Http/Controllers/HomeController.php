<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $themes = 'dodge';

        return view('pages.welcome', ['theme' => $themes]);
    }
}
