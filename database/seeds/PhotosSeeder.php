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
                'code' => 'tanigawadake_1',
                'name' => '2019/6/22 谷川岳にて',
                'visible' => true,
            ],
        ];
    }
}
