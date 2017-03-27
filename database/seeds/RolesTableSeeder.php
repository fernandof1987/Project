<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'description' => 'Admin',
        ]);

         DB::table('roles')->insert([
            'description' => 'Edit',
        ]);

         DB::table('roles')->insert([
            'description' => 'View',
        ]);
    }
}
