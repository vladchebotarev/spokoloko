<?php

use Illuminate\Database\Seeder;

class VenueTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venuetypes')->insert([
            ['id' => 1, 'name' => 'Loft'],
            ['id' => 2, 'name' => 'Galeria'],
            ['id' => 3, 'name' => 'Studia'],
            ['id' => 4, 'name' => 'Restauracja'],
            ['id' => 5, 'name' => 'Pub'],
            //TODO

        ]);
    }
}
