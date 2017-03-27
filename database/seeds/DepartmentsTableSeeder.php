<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'company_id' => 1,
            'description' => 'TI',
            'created_at' => date ("Y-m-d"),
        ]); 

        DB::table('departments')->insert([
            'company_id' => 1,
            'description' => 'Logística',
            'created_at' => date ("Y-m-d"),
        ]); 

        DB::table('departments')->insert([
            'company_id' => 1,
            'description' => 'Back Office',
            'created_at' => date ("Y-m-d"),
        ]); 
    }
}
