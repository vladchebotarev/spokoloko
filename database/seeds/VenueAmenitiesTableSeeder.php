<?php

use Illuminate\Database\Seeder;

class VenueAmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venueamenities')->insert([
            ['id' => 1, 'name' => 'Wi-Fi'],
            ['id' => 2, 'name' => 'Parking'],
            ['id' => 3, 'name' => 'Projektor'],
            ['id' => 4, 'name' => 'Napoje bezalkoholowe'],
            ['id' => 5, 'name' => 'Napoje alkoholowe'],
            //TODO

        ]);
    }
}
