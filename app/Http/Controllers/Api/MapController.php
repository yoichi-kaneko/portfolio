<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mountain;

class MapController extends Controller
{
    public function index()
    {
        $maps = \Config::get('maps');
        $markers = Mountain::select([
            'name',
            'date',
            'url',
            'latitude',
            'longitude',
            'description',
        ])->orderBy('date', 'asc')->get();
        return [
            'api_key' => env('GOOGLE_API_KEY'),
            'marker_zoom' => $maps['marker_zoom'],
            'options' => $maps['options'],
            'markers' => $markers
        ];
    }
}
