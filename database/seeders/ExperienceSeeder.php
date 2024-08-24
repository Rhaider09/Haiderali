<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experience = [
            [
                'position' => 'Laravel Developer and PHP Developer',
                'company_name' => 'Shiners Technologies',
                'time_given' => 'Full-time',
                'time_stayed' => '2023 - Present',
                'address' => 'Lahore, Pakistan',
                'code_languages' => 'Laravel and Vue js and PHP Developer',
            ],
            [
                'position' => 'SEO Optimization',
                'company_name' => 'Shiners Technologies',
                'time_given' => 'Full-time',
                'time_stayed' => 'Oct 2023 - Present',
                'address' => 'Lahore, Pakistan',
                'code_languages' => 'SEO Optimization tools',
            ],

        ];

        Experience::insert($experience);
    }
}
