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
            ['id' => 1, 'name' => 'Klasyczny'],
            ['id' => 2, 'name' => 'Przemysłowy'],
            ['id' => 3, 'name' => 'Romantyczny'],
            ['id' => 4, 'name' => 'Luksusowy'],
            ['id' => 5, 'name' => 'Minimalistyczny'],
            ['id' => 6, 'name' => 'Nowoczesny'],
            ['id' => 7, 'name' => 'Skandynawski'],
            ['id' => 8, 'name' => 'Miejski'],
            ['id' => 9, 'name' => 'Loftowy'],
            ['id' => 10, 'name' => 'Góralski'],
            ['id' => 11, 'name' => 'Staropolski'],
            ['id' => 12, 'name' => 'Japoński'],
            ['id' => 13, 'name' => 'Włoski'],
            //TODO

        ]);
    }
}
