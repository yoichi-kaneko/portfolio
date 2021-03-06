<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                WorksSeeder::class,
                SkillsSeeder::class,
                SkillTypesSeeder::class,
                PortfoliosSeeder::class,
                FreetimesSeeder::class,
                PhotosSeeder::class,
                MountainSeeder::class,
            ]
        );
    }
}
