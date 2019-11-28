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
        [
           'name' => 'Superadmin',
           'email' => 'a@a.com',
           'role' => 'admin',
           'password' =>  bcrypt('777333111'),
        ]
     ]);
    }
}
