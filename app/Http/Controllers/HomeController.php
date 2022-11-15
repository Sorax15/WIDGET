<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $theme = 'ford';

    public function index()
    {
        return view('pages.welcome', ['theme' => $this->theme]);
    }

    public function question(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|min:10',
            'question' => 'required|min:10'
        ]);
    }
}
