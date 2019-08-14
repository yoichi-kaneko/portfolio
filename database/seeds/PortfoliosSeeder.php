<?php

use Illuminate\Database\Seeder;

class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->truncate();
        DB::table('portfolios')->insert($this->get_data());
    }

    private function get_data()
    {
        return [
            [
                'code' => 'talent_blog',
                'name' => '有名人ブログ開発運営',
                'visible' => true,
            ],
            [
                'code' => 'first_ec_site',
                'name' => 'ECサイト構築',
                'visible' => true,
            ],
            [
                'code' => 'e_books',
                'name' => '電子書籍サイト構築',
                'visible' => true,
            ],
            [
                'code' => 'media_platform',
                'name' => 'メディアプラットフォームサイト開発運営',
                'visible' => true,
            ],
            [
                'code' => 'sharing_economy',
                'name' => 'シェアリングエコノミーサイト開発',
                'visible' => true,
            ],
            [
                'code' => 'education_service',
                'name' => '教育クラウドサービス開発',
                'visible' => true,
            ],
            [
                'code' => 'ar_camera',
                'name' => 'ARアプリ開発',
                'visible' => false
            ],
            [
                'code' => 'simulate_housing',
                'name' => '賃貸住宅シミュレーション開発',
                'visible' => false
            ],
        ];
    }
}
