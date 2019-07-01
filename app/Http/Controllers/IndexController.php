<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $is_production = config('app.env') === 'production';
        return view('index')->with([
            'is_production' => $is_production
        ]);
    }
}
