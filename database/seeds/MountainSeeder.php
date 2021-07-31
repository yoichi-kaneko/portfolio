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
                'name' => '伊吹山',
                'date' => '2020-03-07',
                'url' => 'https://yamap.com/activities/5777584',
                'latitude' => 35.417902,
                'longitude' => 136.406517,
                'description' => '上野口から登頂',
            ],
            [
                'name' => '天城山',
                'date' => '2020-07-31',
                'url' => 'https://yamap.com/activities/7074900',
                'latitude' => 34.862816,
                'longitude' => 139.001799,
                'description' => '縦走コース完走',
            ],
            [
                'name' => '那須岳',
                'date' => '2020-08-02',
                'url' => 'https://yamap.com/activities/7116380',
                'latitude' => 37.125542,
                'longitude' => 139.963696,
                'description' => '茶臼岳登頂',
            ],
            [
                'name' => '安達太良山',
                'date' => '2020-08-10',
                'url' => 'https://yamap.com/activities/7237087',
                'latitude' => 37.621140,
                'longitude' => 140.287824,
                'description' => '岳温泉から安達太良山まで往復',
            ],
            [
                'name' => '磐梯山',
                'date' => '2020-08-11',
                'url' => 'https://yamap.com/activities/7256586',
                'latitude' => 37.600961,
                'longitude' => 140.072210,
                'description' => '裏磐梯登山口から猪苗代登山口まで縦走',
            ],
            [
                'name' => '雨飾山',
                'date' => '2020-08-24',
                'url' => 'https://yamap.com/activities/7437553',
                'latitude' => 36.902000,
                'longitude' => 137.962709,
                'description' => '雨飾キャンプ場から登頂',
            ],
            [
                'name' => '巻機山',
                'date' => '2020-09-06',
                'url' => 'https://yamap.com/activities/7586319',
                'latitude' => 36.978587,
                'longitude' => 138.965539,
                'description' => '巻機登山口から登頂',
            ],
            [
                'name' => '高妻山',
                'date' => '2020-09-22',
                'url' => 'https://yamap.com/activities/7809830',
                'latitude' => 36.799634,
                'longitude' => 138.052335,
                'description' => '戸隠牧場から登頂',
            ],
            [
                'name' => '武尊山',
                'date' => '2020-10-04',
                'url' => 'https://yamap.com/activities/7997977',
                'latitude' => 36.805138,
                'longitude' => 139.132955,
                'description' => '上野原登山口から登頂、周回',
            ],
            [
                'name' => '四阿山',
                'date' => '2020-10-11',
                'url' => 'https://yamap.com/activities/8085677',
                'latitude' => 36.541624,
                'longitude' => 138.412790,
                'description' => '根子岳、四阿山を周回',
            ],
            [
                'name' => '大台ヶ原',
                'date' => '2020-11-08',
                'url' => 'https://yamap.com/activities/8539797',
                'latitude' => 34.185112,
                'longitude' => 136.109232,
                'description' => '大台ヶ原のコース周回',
            ],
            [
                'name' => '雲取山',
                'date' => '2020-11-22',
                'url' => 'https://yamap.com/activities/8768739',
                'latitude' => 35.855471,
                'longitude' => 138.944016,
                'description' => '鴨沢登山口から往復',
            ],
            [
                'name' => '丹沢山',
                'date' => '2021-01-09',
                'url' => 'https://yamap.com/activities/9384242',
                'latitude' => 35.454034,
                'longitude' => 139.163269,
                'description' => '西丹沢から日帰りで主稜縦走',
            ],
            [
                'name' => '九重山',
                'date' => '2021-03-22',
                'url' => 'https://yamap.com/activities/10349140',
                'latitude' => 33.081828,
                'longitude' => 131.240728,
                'description' => '三俣山、中岳、久住山など縦走',
            ],
            [
                'name' => '霧島山',
                'date' => '2021-04-26',
                'url' => 'https://yamap.com/activities/10870021',
                'latitude' => 31.933964,
                'longitude' => 130.861438,
                'description' => '大幡山から韓国岳に向けて縦走',
            ],
            [
                'name' => '瑞牆山',
                'date' => '2021-05-23',
                'url' => 'https://yamap.com/activities/11348938',
                'latitude' => 35.893505,
                'longitude' => 138.592085,
                'description' => '瑞牆山荘から周回',
            ],
            [
                'name' => '日光男体山',
                'date' => '2021-05-29',
                'url' => 'https://yamap.com/activities/11433475',
                'latitude' => 36.747776,
                'longitude' => 139.489186,
                'description' => '二荒山神社より登頂',
            ],
            [
                'name' => '筑波山',
                'date' => '2021-06-13',
                'url' => 'https://yamap.com/activities/11715951',
                'latitude' => 36.225904,
                'longitude' => 140.098545,
                'description' => '筑波山神社より周回',
            ],
            [
                'name' => '甲武信ヶ岳',
                'date' => '2021-06-20',
                'url' => 'https://yamap.com/activities/11819314',
                'latitude' => 35.909217,
                'longitude' => 138.728938,
                'description' => '大弛峠から登り、毛木平へ下山',
            ],
            [
                'name' => '八幡平',
                'date' => '2021-06-25',
                'url' => 'https://yamap.com/activities/11870885',
                'latitude' => 39.956512,
                'longitude' => 141.071256,
                'description' => '周辺を散策',
            ],
            [
                'name' => '岩手山',
                'date' => '2021-06-26',
                'url' => 'https://yamap.com/activities/11894583',
                'latitude' => 39.852621,
                'longitude' => 141.001018,
                'description' => '馬返し登山口より登頂',
            ],
            [
                'name' => '富士山',
                'date' => '2021-07-11',
                'url' => 'https://yamap.com/activities/12060497',
                'latitude' => 35.343752,
                'longitude' => 138.752193,
                'description' => '御殿場口新五合目から宝永山まで',
            ],
            [
                'name' => '羅臼岳',
                'date' => '2021-07-18',
                'url' => 'https://yamap.com/activities/12167791',
                'latitude' => 44.073970,
                'longitude' => 145.130714,
                'description' => '羅臼温泉コースで挑むが屏風岩で撤退',
            ],
            [
                'name' => '甲斐駒ヶ岳',
                'date' => '2021-07-23',
                'url' => 'https://yamap.com/activities/12269283',
                'latitude' => 35.757778,
                'longitude' => 138.236667,
                'description' => '北沢峠より登頂',
            ],
            [
                'name' => '仙丈ヶ岳',
                'date' => '2021-07-24',
                'url' => 'https://yamap.com/activities/12304237',
                'latitude' => 35.719967,
                'longitude' => 138.183633,
                'description' => '北沢峠より登頂',
            ],
        ];
    }
}
