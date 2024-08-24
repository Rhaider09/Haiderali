<?php

namespace Database\Seeders;

use App\Models\Project_language;
use Illuminate\Database\Seeder;

class Project_languageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_languages = [
            [
                'project_id' => '1',
                'image' => 'laravel.png',
                'name' => 'Laravel',
            ],
            [
                'project_id' => '1',
                'image' => 'php.png',
                'name' => 'PHP',
            ],
            [
                'project_id' => '1',
                'image' => 'mysql.png',
                'name' => 'MySQL',
            ],
            [
                'project_id' => '1',
                'image' => 'vue.png',
                'name' => 'Vue.js',
            ],

            // second

            [
                'project_id' => '2',
                'image' => 'laravel.png',
                'name' => 'Laravel',
            ],
            [
                'project_id' => '2',
                'image' => 'php.png',
                'name' => 'PHP',
            ],
            [
                'project_id' => '2',
                'image' => 'mysql.png',
                'name' => 'MySQL',
            ],

            // third

            [
                'project_id' => '3',
                'image' => 'laravel.png',
                'name' => 'Laravel',
            ],
            [
                'project_id' => '3',
                'image' => 'php.png',
                'name' => 'PHP',
            ],
            [
                'project_id' => '3',
                'image' => 'mysql.png',
                'name' => 'MySQL',
            ],
            [
                'project_id' => '3',
                'image' => 'vue.png',
                'name' => 'Vue.js',
            ],

            // forth

            [
                'project_id' => '4',
                'image' => 'laravel.png',
                'name' => 'Laravel',
            ],

            // fifth

            [
                'project_id' => '5',
                'image' => 'laravel.png',
                'name' => 'Laravel',
            ],

            // sixth

            [
                'project_id' => '6',
                'image' => 'laravel.png',
                'name' => 'Laravel',
            ],
        ];


    foreach ($project_languages as $language) {
        Project_language::create($language);
    }
    }
}
