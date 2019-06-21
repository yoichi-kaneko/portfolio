<?php

use Illuminate\Database\Seeder;

class SkillTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill_types')->truncate();
        DB::table('skill_types')->insert($this->get_data());
    }

    private function get_data()
    {
        return [
            [
                'code' => 'program',
                'name' => '言語・フレームワーク',
            ],
            [
                'code' => 'position',
                'name' => '役割',
            ],
            [
                'code' => 'for_a_while',
                'name' => 'ちょっとできる',
            ],
        ];
    }
}
