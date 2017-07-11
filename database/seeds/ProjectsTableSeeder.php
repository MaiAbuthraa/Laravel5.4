<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker::create();
        foreach(range(1,30) as $key){
          \App\Project::create([
            'title'=>$faker->sentence(5),
            'description'=>$faker->paragraph(4)
          ]);
        }
    }
}
