<?php

use Illuminate\Database\Seeder;

class ProjectStagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            DB::table('project_stages')->insert([
                'stage_number' => 1,
                'project_id' => $i + 1,
                'description' => $faker->text,
                //'task_id'   => rand(0, 200),
                'completed' => 1,
                'created_at' => date ("Y-m-d")
            ]);
        }

         for($i = 0; $i < 10; $i++) {
            DB::table('project_stages')->insert([
                'stage_number' => 2,
                'project_id' => $i + 1,
                'description' => $faker->text,
                //'task_id'   => rand(0, 200),
                //'final_date' => date ("Y-m-d"),
                'created_at' => date ("Y-m-d")
            ]);
        }
    }
}
