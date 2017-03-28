<?php

use Illuminate\Database\Seeder;

class TaskStageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 200; $i++) {
            DB::table('task_stage')->insert([
                'stage_id' => rand(1, 20),
                'task_id' => rand(1, 200),
                'created_at' => date ("Y-m-d")
            ]);
        }
    }
}
