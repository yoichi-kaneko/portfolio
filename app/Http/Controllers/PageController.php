<?php

namespace App\Http\Controllers;

# use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Skill;
use App\Models\SkillType;
use App\Models\Portfolio;
use App\Models\Photo;
use App\Models\Freetime;

class PageController extends Controller
{
    public function about()
    {
        $photos = Photo::orderBy('id', 'asc')->where(['visible' => true])->get();
        return view('page/about')->with([
            'photos' => $photos
        ]);
    }

    public function portfolio()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->where(['visible' => true])->get();
        return view('page/portfolio')->with([
            'portfolios' => $portfolios
        ]);
    }

    public function resume()
    {
        $works = Work::orderBy('id', 'desc')->get();
        $skill_types = SkillType::orderBy('id', 'asc')->get();
        $skills = Skill::get_by_each_types();

        return view('page/resume')->with([
            'works' => $works,
            'skill_types' => $skill_types,
            'skills' => $skills
        ]);
    }

    public function private()
    {
        $freetimes = Freetime::orderBy('id', 'asc')->get();
        return view('page/private')->with([
            'freetimes' => $freetimes
        ]);
    }

    public function contact()
    {
        return view('page/contact');
    }
}
