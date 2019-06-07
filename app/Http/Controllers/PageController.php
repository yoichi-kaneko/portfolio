<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

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
        $works = Work::orderBy('id', 'asc')->get();

        return view('page/resume')->with([
            'works' => $works
        ]);
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
