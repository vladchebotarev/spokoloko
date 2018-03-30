<?php

use Illuminate\Database\Seeder;

class VenueFeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venuefeatures')->insert([
            ['id' => 1, 'name' => 'Basen'],
            ['id' => 2, 'name' => 'Dach'],
            ['id' => 3, 'name' => 'Ogród'],
            ['id' => 4, 'name' => 'Graffiti'],
            ['id' => 5, 'name' => 'Widok'],
            //TODO

        ]);
    }
}
