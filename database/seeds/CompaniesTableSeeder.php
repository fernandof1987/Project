<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Empresa XPTO',
            'description' => 'XPTO',
            'created_at' => date ("Y-m-d"),
        ]); 
    }
}
