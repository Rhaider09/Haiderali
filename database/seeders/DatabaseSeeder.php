<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(CVSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(Project_featureSeeder::class);
        $this->call(Project_imageSeeder::class);
        $this->call(Project_languageSeeder::class);
    }
}
