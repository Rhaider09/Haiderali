<?php

namespace Database\Seeders;

use App\Models\Project_image;
use Illuminate\Database\Seeder;

class Project_imageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_image = [
            [
                'project_id' => '2',
                'image' => 'greenworld-1.png',
            ],
            [
                'project_id' => '2',
                'image' => 'greenworld-2.png',
            ],
            [
                'project_id' => '2',
                'image' => 'greenworld-3.png',
            ],
            [
                'project_id' => '3',
                'image' => 'shinerstech-1.png',
            ],
            [
                'project_id' => '3',
                'image' => 'shinerstech-2.png',
            ],
            [
                'project_id' => '3',
                'image' => 'shinerstech-3.png',
            ],
            [
                'project_id' => '1',
                'image' => 'localbites-1.png',
            ],
            [
                'project_id' => '1',
                'image' => 'localbites-2.png',
            ],
            [
                'project_id' => '1',
                'image' => 'localbites-3.png',
            ],
            [
                'project_id' => '1',
                'image' => 'localbites-4.png',
            ],
            [
                'project_id' => '1',
                'image' => 'localbites-5.png',
            ],
            [
                'project_id' => '1',
                'image' => 'localbites-6.png',
            ],
            [
                'project_id' => '1',
                'image' => 'localbites-7.png',
            ],
            [
                'project_id' => '1',
                'image' => 'localbites-8.png',
            ],
        ];

        foreach ($project_image as $image) {
            Project_image::create($image);
        }
    }
}
