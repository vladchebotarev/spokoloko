<?php

use Illuminate\Database\Seeder;

class VenueRulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venuerules')->insert([
            ['id' => 1, 'name' => 'Accepts children (0-10)'],
            ['id' => 2, 'name' => 'Accepts teenagers (10-18)'],
            ['id' => 3, 'name' => 'Accepts under-age (18-21)'],
            ['id' => 4, 'name' => 'Cooking allowed'],
            ['id' => 5, 'name' => 'External catering allowed'],
            ['id' => 6, 'name' => 'Late night parties allowed'],
            ['id' => 7, 'name' => 'Loud music allowed'],
            ['id' => 8, 'name' => 'Open flame allowed'],
            ['id' => 9, 'name' => 'Open to public events'],
            ['id' => 10, 'name' => 'Selling alcohol allowed'],
            ['id' => 11, 'name' => 'Serving alcohol allowed'],
            ['id' => 12, 'name' => 'Smoking allowed'],
            ['id' => 13, 'name' => 'Smoking outside allowed'],
            ['id' => 14, 'name' => 'Soft music allowed'],
            ['id' => 15, 'name' => 'Ticket sales allowed'],
            //TODO

        ]);
    }
}
