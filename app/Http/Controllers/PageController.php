<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Skill;

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
        $skills = Skill::get_by_each_types();

        return view('page/resume')->with([
            'works' => $works,
            'skills' => $skills
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
