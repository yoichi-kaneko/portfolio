<?php

namespace Tests\Feature\Request;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * aboutページへのアクセステスト
     *
     * @return void
     */
    public function testRequestAbout()
    {
        $response = $this->get('/page/about');

        $response->assertStatus(200);
    }

    /**
     * ポートフォリオページへのアクセステスト
     *
     * @return void
     */
    public function testRequestPortfolio()
    {
        $response = $this->get('/page/portfolio');

        $response->assertStatus(200);
    }

    /**
     * 経歴ページへのアクセステスト
     *
     * @return void
     */
    public function testRequestResume()
    {
        $response = $this->get('/page/resume');

        $response->assertStatus(200);
    }

    /**
     * privateページへのアクセステスト
     *
     * @return void
     */
    public function testRequestPrivate()
    {
        $response = $this->get('/page/private');

        $response->assertStatus(200);
    }
}
