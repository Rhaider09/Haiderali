<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project = [
            [
                'title' => 'localbites.delivery',
                'link' => 'https://localbites.delivery/',
                'tags' => '#LaravelFramework #VueJS #WebDevelopment #FoodDelivery #LocalEats',
                'language' => 'Web Application made with Laravel.',
                'description' => 'LocalBites is your go-to hub for ordering food from nearby restaurants.',
                'thumbnail' => 'Local-Bites.png',
            ],
            [
                'title' => 'greenworldrealestate',
                'link' => 'https://greenworldrealestateweb.shinerstech.com/',
                'tags' => '#LaravelFramework #VueJS #WebDevelopment #FoodDelivery #LocalEats',
                'language' => 'Web Application made with Laravel.',
                'description' => 'Green World Real Estate is your go-to hub for finding the perfect property and making informed real estate decisions.',
                'thumbnail' => 'greenworld.jpg',
            ],
            [
                'title' => 'Shiners tech',
                'link' => 'https://shinerstech.com/',
                'tags' => '#SEOManagement #SocialMediaTools #LaravelFramework #BladeTemplate #WebDevelopment',
                'language' => 'Web Application made with Laravel.',
                'description' => 'Shinerstech revolutionizes digital strategies with advanced AI tools for content creation, audio generation, and keyword analysis.',
                'thumbnail' => 'Shinerstech.jpg',
            ],

        ];

        Project::insert($project);
    }
}
