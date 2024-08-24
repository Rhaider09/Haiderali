<?php

namespace Database\Seeders;

use App\Models\Project_feature;
use Illuminate\Database\Seeder;

class Project_featureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_features = [
            [
                'project_id' => '1',
                'feature' => 'Personalized Coaching Profiles',
            ],
            [
                'project_id' => '1',
                'feature' => 'Customized Training Programs',
            ],
            [
                'project_id' => '1',
                'feature' => 'Athlete Community Forum',
            ],
            [
                'project_id' => '1',
                'feature' => 'Virtual Training Sessions',
            ],
            [
                'project_id' => '1',
                'feature' => 'Performance Tracking Tools',
            ],
            [
                'project_id' => '2',
                'feature' => 'Advanced AI Content Creation',
            ],
            [
                'project_id' => '2',
                'feature' => 'Audio Generation Capabilities',
            ],
            [
                'project_id' => '2',
                'feature' => 'Keyword Analysis Tools',
            ],
            [
                'project_id' => '2',
                'feature' => 'All-in-One Project Management',
            ],
            [
                'project_id' => '2',
                'feature' => 'Business Growth Insights',
            ],

        ];


        foreach ($project_features as $feature) {
            Project_feature::create($feature);
        }
    }
}
