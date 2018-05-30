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
            ['id' => 5, 'name' => 'Dekoracje'],
            ['id' => 6, 'name' => 'Widok'],
            ['id' => 7, 'name' => 'Bar'],
            ['id' => 8, 'name' => 'Oddzielny Pokój'],
            ['id' => 9, 'name' => 'Kolumny'],
            ['id' => 10, 'name' => 'Beton'],
            ['id' => 11, 'name' => 'Widoczna cegła'],
            ['id' => 12, 'name' => 'Widoczne rury'],
            ['id' => 13, 'name' => 'Kominek'],
            ['id' => 14, 'name' => 'Ogródek'],
            ['id' => 15, 'name' => 'Wysoki sufit'],
            ['id' => 16, 'name' => 'Duże okna'],
            ['id' => 17, 'name' => 'Biblioteka'],
            ['id' => 18, 'name' => 'Fortepian'],
            ['id' => 19, 'name' => 'Nowoczesna Łazienka'],
            ['id' => 20, 'name' => 'Zieleń'],
            ['id' => 21, 'name' => 'Dźwiękoszczelny'],
            ['id' => 22, 'name' => 'Witryna Sklepowa'],
            ['id' => 23, 'name' => 'Biała Przestrzeń'],
            ['id' => 24, 'name' => 'Drewniane Podłogi'],
            ['id' => 25, 'name' => 'Osobne Wejscie'],
            ['id' => 26, 'name' => 'Open Kitchen'],
            //TODO

        ]);
    }
}
