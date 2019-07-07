<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaicPagesController extends Controller
{
    //
    public function home()
    {
        # code...
        return view('staic_pages/home');
    }
    public function help()
    {
        # code...
        return view('staic_pages/help');
    }
    public function about()
    {
        # code...
        return view('staic_pages.about');
    }
}
