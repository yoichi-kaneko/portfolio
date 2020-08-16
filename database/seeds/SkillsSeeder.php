<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'name' => 'PHP',
                'grade' => 5,
                'description' => '11年'
            ],
            [
                'type' => 'program',
                'name' => 'Ruby on Rails',
                'grade' => 3,
                'description' => '3年'
            ],
            [
                'type' => 'program',
                'name' => 'MySQL',
                'grade' => 5,
                'description' => '10年'
            ],
            [
                'type' => 'program',
                'name' => 'jQuery',
                'grade' => 5,
                'description' => '7年'
            ],
            [
                'type' => 'program',
                'name' => 'CakePHP',
                'grade' => 3,
                'description' => '2年'
            ],
            [
                'type' => 'program',
                'name' => 'Zend Framework',
                'grade' => 5,
                'description' => '6年'
            ],
            [
                'type' => 'program',
                'name' => 'FuelPHP',
                'grade' => 4,
                'description' => '2年'
            ],
            [
                'type' => 'program',
                'name' => 'Laravel',
                'grade' => 3,
                'description' => '2年'
            ],
            [
                'type' => 'program',
                'name' => 'Wordpress',
                'grade' => 3,
                'description' => '3年'
            ],
            [
                'type' => 'program',
                'name' => 'PostgreSQL',
                'grade' => 3,
                'description' => '2年'
            ],
            [
                'type' => 'program',
                'name' => 'GitHub',
                'grade' => 3,
                'description' => '2年'
            ],
            [
                'type' => 'position',
                'name' => '基礎、詳細設計',
                'grade' => 4,
                'description' => '8年'
            ],
            [
                'type' => 'position',
                'name' => 'コーディング',
                'grade' => 5,
                'description' => '10年'
            ],
            [
                'type' => 'position',
                'name' => 'DBテーブル設計',
                'grade' => 4,
                'description' => '7年'
            ],
            [
                'type' => 'position',
                'name' => 'パフォーマンス調査',
                'grade' => 3,
                'description' => '3年'
            ],
            [
                'type' => 'position',
                'name' => '保守',
                'grade' => 4,
                'description' => '6年'
            ],
            [
                'type' => 'position',
                'name' => 'ファシリテーション',
                'grade' => 4,
                'description' => '7年'
            ],
            [
                'type' => 'for_a_while',
                'name' => 'AngularJS',
                'grade' => 1,
                'description' => '1年未満'
            ],
            [
                'type' => 'for_a_while',
                'name' => 'Unity',
                'grade' => 1,
                'description' => '1年未満'
            ],
            [
                'type' => 'for_a_while',
                'name' => 'AWS',
                'grade' => 2,
                'description' => '2年'
            ],
        ];
    }
}
