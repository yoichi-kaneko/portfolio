<?php

namespace Tests\Feature\Request;

use App\Models\Mountain;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MapApiTest extends TestCase
{
    /**
     * Map情報を取得するAPIをテスト
     *
     * @return void
     */
    public function testRequestMapApi()
    {
        $response = $this->get('/api/map');

        $response->assertStatus(200);

        $markers_count = Mountain::orderBy('date', 'asc')->count();
        $response->assertJsonCount($markers_count, 'markers');
        $response->assertJsonStructure(
            [
                'api_key',
                'marker_zoom',
                'options',
                'markers' => [
                    '*' => [
                        'name',
                        'date',
                        'url',
                        'latitude',
                        'longitude',
                        'description',
                    ]
                ],
            ]
        );
    }
}
