<?php

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->truncate();
        DB::table('skills')->insert($this->get_data());
    }

    private function get_data()
    {
        return [
            [
                'type' => 'program',
                'name' => 'php',
                'grade' => 5,
                'description' => '10年'
            ],
            [
                'type' => 'program',
                'name' => 'ruby',
                'grade' => 3,
                'description' => '3年'
            ],
            [
                'type' => 'job',
                'name' => 'コーディング',
                'grade' => 5,
                'description' => '10年'
            ],
        ];
    }
}
