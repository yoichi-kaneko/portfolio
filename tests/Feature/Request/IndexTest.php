<?php

namespace Tests\Feature\Request;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * インデックスページへのアクセステスト
     *
     * @return void
     */
    public function testRequestIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
