<?php

use Illuminate\Database\Seeder;

class FreetimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('freetimes')->truncate();
        DB::table('freetimes')->insert($this->get_data());
    }

    private function get_data()
    {
        return [
            [
                'code' => 'swarm',
                'name' => '休日の外出',
                'description' => '休日には時間があれば外に出て、少し離れたところの神社を回ったり日帰り登山に行ったりしています。',
            ],
            [
                'code' => 'torii',
                'name' => '神社巡り',
                'description' => '休日にはよく神社を回ります。御朱印目当てで行く事もありますし、無人の神社を調べてそれらを辿る事もあります。大体関東の日帰りで行ける距離で、たまに小旅行で離れた場所に行く事もあります。',
            ],
            [
                'code' => 'mountain',
                'name' => '登山',
                'description' => '時間が取れた時には日帰りや前泊で登山に行く事があります。2018年より本格的に始めた趣味で、百名山だと白山登頂、天城山縦走、谷川岳縦走など達成しています。',
            ],
            [
                'code' => 'untappd',
                'name' => 'クラフトビール巡り',
                'description' => '休日や、平日の仕事明けにビアバーに行って飲んで回っています。その記録はuhtappdというアプリで管理しています。untappd ID: straysheep',
            ],
            [
                'code' => 'kosenjo',
                'name' => 'ソシャゲ',
                'description' => '他にはソシャゲでグラブルをプレイしていたりしています。',
            ],
        ];
    }
}
