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
            ['id' => 1, 'name' => 'Studio Fotograficzne'],
            ['id' => 2, 'name' => 'Studio Nagrań'],
            ['id' => 3, 'name' => 'Loft'],
            ['id' => 4, 'name' => 'Apartament'],
            ['id' => 5, 'name' => 'Audytorium/Aula'],
            ['id' => 6, 'name' => 'Teatr'],
            ['id' => 7, 'name' => 'Kino'],
            ['id' => 8, 'name' => 'Sala Bankietowa/Sala Balowa'],
            ['id' => 9, 'name' => 'Muzeum'],
            ['id' => 10, 'name' => 'Bar/Restauracja'],
            ['id' => 11, 'name' => 'Kawiarnia/Klubokawiarnia'],
            ['id' => 12, 'name' => 'Łódka/Statek'],
            ['id' => 13, 'name' => 'Browarnia/Winnica'],
            ['id' => 14, 'name' => 'Sala Szkoleniowa/Sala Konferencyjna'],
            ['id' => 15, 'name' => 'Przestrzeń Eventowa'],
            ['id' => 16, 'name' => 'Taras/Ogród'],
            ['id' => 17, 'name' => 'Dom'],
            ['id' => 18, 'name' => 'Dom Imprezowy'],
            ['id' => 19, 'name' => 'Biuro/Co Working'],
            ['id' => 20, 'name' => 'Sala Konferencyjna'],
            ['id' => 21, 'name' => 'Obiekt Sportowy'],
            ['id' => 22, 'name' => 'Studio (Tańca/Kreatywne/Etc.)'],
            ['id' => 23, 'name' => 'Rooftop'],
            ['id' => 24, 'name' => 'Magazyn'],
            ['id' => 25, 'name' => 'Inne'],
            //TODO

        ]);
    }
}
