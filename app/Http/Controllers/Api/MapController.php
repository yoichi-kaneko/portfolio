<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class MapController extends Controller
{
    public function index()
    {
        return [
            'api_key' => env('GOOGLE_API_KEY'),
            'options' => \Config::get('maps'),
            'markers' => []
        ];
    }
}
