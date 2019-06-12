<?php

namespace App\Http\Controllers;

# use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function detail($id)
    {
        $portfolio = Portfolio::find($id);
        if (empty($portfolio) || !$portfolio->visible) {
            abort(404);
        }
        return view('portfolio/' . $portfolio->code);
    }
}
