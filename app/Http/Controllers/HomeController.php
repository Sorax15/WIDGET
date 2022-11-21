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
        $validated = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric|min:10',
            'question' => 'required|min:10'
        ]);

    }
}
