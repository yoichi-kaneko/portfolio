<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('page/about');
    }

    public function portfolio()
    {
        return view('page/portfolio');
    }

    public function resume()
    {
        return view('page/resume');
    }

    public function private()
    {
        return view('page/private');
    }

    public function contact()
    {
        return view('page/contact');
    }
}
