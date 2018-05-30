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
            ['id' => 6, 'name' => 'Dodatkowe krzesła'],
            ['id' => 7, 'name' => 'Klimatyzacja'],
            ['id' => 8, 'name' => 'Samoobsługowa Kuchnia'],
            ['id' => 9, 'name' => 'Obsługa/Personel'],
            ['id' => 10, 'name' => 'Nagłośnienie'],
            ['id' => 11, 'name' => 'TV'],
            ['id' => 12, 'name' => 'Mikrofon'],
            ['id' => 13, 'name' => 'Ochrona'],
            ['id' => 14, 'name' => 'Flipchart'],
            ['id' => 15, 'name' => 'Winda'],
            ['id' => 16, 'name' => 'Whiteboard'],
            ['id' => 17, 'name' => 'Katering zewnętrzyny'],
            ['id' => 18, 'name' => 'Scena'],
            ['id' => 19, 'name' => 'Miejsca Dla Dzieci'],
            //TODO

        ]);
    }
}
