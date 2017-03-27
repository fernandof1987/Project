<?php

use Illuminate\Database\Seeder;

class ProjectStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_status')->insert([
            'description' => 'Finalizado',
        ]);

        DB::table('project_status')->insert([
            'description' => 'Pause',
        ]);

        DB::table('project_status')->insert([
            'description' => 'Em andamento',
        ]);
    }
}
