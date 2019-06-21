<?php

use Illuminate\Database\Seeder;

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->truncate();
        DB::table('photos')->insert($this->get_data());
    }

    private function get_data()
    {
        return [
            [
                'code' => 'slider_img1',
                'name' => 'サンプル画像１',
                'visible' => true,
            ],
            [
                'code' => 'slider_img2',
                'name' => 'サンプル画像２',
                'visible' => true,
            ],
            [
                'code' => 'slider_img3',
                'name' => 'サンプル画像３',
                'visible' => true,
            ],
        ];
    }
}
