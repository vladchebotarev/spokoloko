<?php

use Illuminate\Database\Seeder;

class VenueStylesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venuestyles')->insert([
            ['id' => 1, 'name' => 'Classic'],
            ['id' => 2, 'name' => 'Industrial'],
            ['id' => 3, 'name' => 'Intimate'],
            ['id' => 4, 'name' => 'Luxurious'],
            ['id' => 5, 'name' => 'Minimalist'],
            ['id' => 6, 'name' => 'Modern'],
            ['id' => 7, 'name' => 'Raw'],
            ['id' => 8, 'name' => 'Urban'],
            ['id' => 9, 'name' => 'Whimsical'],
            //TODO

        ]);
    }
}
