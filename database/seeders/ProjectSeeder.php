<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100 ; $i++) { 
            $new_project = new Project();
            $new_project->title = $faker->word();
            $new_project->description = $faker->sentence();
            $new_project->client = $faker->company();
            $new_project->save();
            
        }
    }
}
