<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mountain;

class MapController extends Controller
{
    public function index()
    {
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
            'options' => \Config::get('maps'),
            'markers' => $markers
        ];
    }
}
