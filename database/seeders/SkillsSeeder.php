<?php

namespace Database\Seeders;

use App\Models\Skills;
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
        $skills = [
            [
                'skill_name' => 'Asp.net Core Developer',
            ],
            [
                'skill_name' => 'Laravel',
            ],
            [
                'skill_name' => 'PHP',
            ],
            [
                'skill_name' => 'C#',
            ],
            [
                'skill_name' => 'Angular',
            ],
            [
                'skill_name' => 'React',
            ],
            [
                'skill_name' => 'Vue.js',
            ],
            [
                'skill_name' => 'Node.js',
            ],
            [
                'skill_name' => 'Full-Stack',
            ],
            [
                'skill_name' => 'jQuery/JavaScript',
            ],
            [
                'skill_name' => 'Tailwind',
            ],
            [
                'skill_name' => 'bootstrap',
            ],
            [
                'skill_name' => 'SEO Tools',
            ],
        ];

        Skills::insert($skills);
    }
}
