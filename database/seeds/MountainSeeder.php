<?php

use Illuminate\Database\Seeder;

class MountainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mountains')->truncate();
        DB::table('mountains')->insert($this->get_data());
    }

    private function get_data()
    {
        return [
            [
                'name' => '白山',
                'date' => '2018-07-15',
                'url' => null,
                'latitude' => 36.149134,
                'longitude' => 136.767879,
                'description' => '山頂手前、室堂ビジターセンターまで',
            ],
            [
                'name' => '丹沢山',
                'date' => '2018-12-01',
                'url' => null,
                'latitude' => 35.454034,
                'longitude' => 139.163269,
                'description' => 'ヤビツ峠より塔ノ岳まで',
            ],
            [
                'name' => '天城山',
                'date' => '2019-05-12',
                'url' => null,
                'latitude' => 34.862816,
                'longitude' => 139.001799,
                'description' => '縦走コース完走',
            ],
            [
                'name' => '谷川岳',
                'date' => '2019-06-22',
                'url' => 'https://yamap.com/activities/3948351',
                'latitude' => 36.834478,
                'longitude' => 138.930238,
                'description' => '悪天候の中西黒尾根からトマの耳まで、オキの耳は断念',
            ],
            [
                'name' => '赤城山',
                'date' => '2019-07-13',
                'url' => 'https://yamap.com/activities/4060134',
                'latitude' => 36.560384,
                'longitude' => 139.193316,
                'description' => '最高峰の黒檜山登頂',
            ],
            [
                'name' => '鳥海山',
                'date' => '2019-08-05',
                'url' => 'https://yamap.com/activities/4230852',
                'latitude' => 39.099325,
                'longitude' => 140.048877,
                'description' => '鉾立ルートで新山に登頂',
            ],
            [
                'name' => '金峰山',
                'date' => '2019-11-03',
                'url' => 'https://yamap.com/activities/4942392',
                'latitude' => 35.871850,
                'longitude' => 138.625384,
                'description' => '大弛峠から瑞牆山荘へ縦走',
            ],
            [
                'name' => '大菩薩嶺',
                'date' => '2019-11-09',
                'url' => 'https://yamap.com/activities/4994172',
                'latitude' => 35.748739,
                'longitude' => 138.845630,
                'description' => '大菩薩峠登山口から大回りで周回',
            ],
            [
                'name' => '筑波山',
                'date' => '2020-01-18',
                'url' => 'https://yamap.com/activities/5444125',
                'latitude' => 36.225904,
                'longitude' => 140.098545,
                'description' => '御幸ヶ原コースから男体山登頂',
            ],
        ];
    }
}
