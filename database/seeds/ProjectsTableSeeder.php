<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
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
            DB::table('projects')->insert([
                'department_id' => rand(1, 3),
                'status_id' => rand(1, 3),
                'project_owner' => rand(1, 1),
                'name' => ucfirst($faker->word),
                'priority' => rand(1, 5),
                'description' => $faker->text,
                'notes' => $faker->text,
                //'canceled' => 1,
                'stipulated_investment' => rand(1000, 10000),
                //'stipulated_date' => $faker->text,
                //'final_date' => $faker->text,

                'created_at' => date ("Y-m-d")
            ]);
        }
        
    }
}
