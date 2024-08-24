<?php

namespace Database\Seeders;

use App\Models\CV;
use Illuminate\Database\Seeder;

class CVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cv = [
            [
                'name' => 'Haider Ali Amjad',
                'image' => 'haiderali.jpg',
                'title' => 'Junior Software Engineer | Freelancer',
                'email' => 'haiderali226433@gmail.com',
                'phone_no' => '+923230436771',
                'website' => 'haiderali.com',
                'address' => 'Lahore District, Punjab, Pakistan',
                'description' => "I'm working as Asp.net Core and Laravel Developer and Responsible for all type of Productions based on Full Stack Environment, from project start to deployment.",
                'uni_image' => 'edu_logo.png',
                'uni_name' => 'Virual University of Pakistan',
                'uni_degree' => "Bachelor's degree, Computer Science",
                'uni_year' => '2021 - 2025',
            ]
        ];

        CV::insert($cv);
    }
}
