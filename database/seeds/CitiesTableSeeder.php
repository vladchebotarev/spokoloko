<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            //['id' => 1, 'name' => 'Warszawa'],
            ['id' => 2, 'name' => 'Kraków'],
            ['id' => 3, 'name' => 'Wrocław'],
            ['id' => 4, 'name' => 'Poznań'],
            ['id' => 5, 'name' => 'Gdańsk'],

        ]);
    }
}
