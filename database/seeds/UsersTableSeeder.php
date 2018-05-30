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
            'first_name' => 'Vlad',
            'email' => 'vlad.bmx4@gmail.com',
            'password' => bcrypt('123456'),
            'confirmed' => 1,
        ]);
    }
}
