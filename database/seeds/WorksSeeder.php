<?php

use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->truncate();
        DB::table('works')->insert($this->get_data());
    }

    private function get_data()
    {
        return [
            [
                'name' => 'ダイヤモンドヘッド株式会社',
                'date_from' => '2008-04-01',
                'date_to' => '2009-12-31',
                'job_type' => '正社員',
                'description' => '説明文1'
            ],
            [
                'name' => 'ルーセント・グローバル株式会社',
                'date_from' => '2010-02-01',
                'date_to' => '2010-06-30',
                'job_type' => '正社員',
                'description' => '説明文2'
            ],
            [
                'name' => 'ビープラッツ株式会社',
                'date_from' => '2010-07-01',
                'date_to' => '2012-02-29',
                'job_type' => '正社員',
                'description' => '説明文3'
            ],
            [
                'name' => '株式会社イクシス',
                'date_from' => '2012-03-01',
                'date_to' => '2015-06-30',
                'job_type' => '正社員',
                'description' => '説明文4'
            ],
            [
                'name' => 'メディアインデックス株式会社',
                'date_from' => '2015-07-01',
                'date_to' => '2018-05-31',
                'job_type' => '正社員',
                'description' => '説明文5'
            ],
            [
                'name' => '株式会社エニセンス',
                'date_from' => '2018-06-01',
                'date_to' => '2018-10-30',
                'job_type' => '正社員',
                'description' => '説明文6'
            ],
        ];
    }
}
