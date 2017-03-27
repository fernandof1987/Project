<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Fernando F. da Silva',
            'email' => 'fernandof1987@gmail.com',
            'department_id' => 1,
            'role_id' => rand(1, 3),
            'password' => '$2y$10$UtfpPeJ4d0KNyJTxpabrDuWlDQAAkSX2BtfHg/x68ZWAT2NxSksyK',//bcrypt('secret'),
            //'UserTypeId' => 1/*rand(0, 3)*/,
        ]);
    }
}
