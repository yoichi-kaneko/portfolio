<?php

namespace Tests\Feature\Request;

use App\Models\Portfolio;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * ポートフォリオ画面へのアクセス
     *
     * @return void
     */
    public function testRequestPortfolio()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->where(['visible' => true])->get();

        foreach ($portfolios as $portfolio) {
            $response = $this->get('/portfolio/' . $portfolio['id']);
            $response->assertStatus(200);
        }
    }

    /**
     * 存在しないポートフォリオ画面へのアクセス
     *
     * @return void
     */
    public function testRequestPortfolioNotFound()
    {
        $portfolio_max_id = Portfolio::where(['visible' => true])->max('id');
        $target_id = $portfolio_max_id + 1;
        $response = $this->get('/portfolio/' . $target_id);
        $response->assertStatus(404);
    }
}
