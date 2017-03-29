<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 200; $i++) {
            DB::table('tasks')->insert([
                'name' => $faker->word,
                'project_id' => rand(1, 10),
                'description' => $faker->text,
                'completed'   => rand(0, 1),
                'created_at' => date ("Y-m-d")
            ]);
        }
    }
}
