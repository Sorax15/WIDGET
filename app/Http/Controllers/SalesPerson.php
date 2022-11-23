<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesPerson extends Controller
{
    public function chooseExpert()
    {
        return view('pages.choose-expert');
    }

    public function expertDetails()
    {
        return view('pages.expert-details');
    }
}
