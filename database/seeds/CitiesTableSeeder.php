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
            //['id' => 1, 'name' => 'Warszawa', 'lat' => 52.240414, 'lng' => 21.007986],
            //['id' => 2, 'name' => 'Kraków', 'lat' => 50.061527, 'lng' => 19.937576],
            ['id' => 3, 'name' => 'Łódź', 'lat' => 51.759248, 'lng' => 19.455983],
            ['id' => 4, 'name' => 'Wrocław', 'lat' => 51.107885, 'lng' => 17.038537],
            ['id' => 5, 'name' => 'Poznań', 'lat' => 52.406374, 'lng' => 16.925168],
            ['id' => 6, 'name' => 'Gdańsk', 'lat' => 54.352025, 'lng' => 18.646638],
            ['id' => 7, 'name' => 'Szczecin', 'lat' => 53.428543, 'lng' => 14.552811],
            ['id' => 8, 'name' => 'Bydgoszcz', 'lat' => 53.123480, 'lng' => 18.008437],
            ['id' => 9, 'name' => 'Lublin', 'lat' => 51.246453, 'lng' => 22.568446],
            ['id' => 10, 'name' => 'Katowice', 'lat' => 50.264891, 'lng' => 19.023781],
            ['id' => 11, 'name' => 'Poznań', 'lat' => 52.406374, 'lng' => 16.925168],
            ['id' => 12, 'name' => 'Gdynia', 'lat' => 54.518889, 'lng' => 18.530540],
            ['id' => 13, 'name' => 'Białystok', 'lat' => 53.132488, 'lng' => 23.168840],
            ['id' => 14, 'name' => 'Bielsko-Biała', 'lat' => 49.822376, 'lng' => 19.058384],
            ['id' => 15, 'name' => 'Bydgoszcz', 'lat' => 53.123480, 'lng' => 18.008437],
            ['id' => 16, 'name' => 'Gliwice', 'lat' => 50.294492, 'lng' => 18.671380],
            ['id' => 17, 'name' => 'Kielce', 'lat' => 50.866077, 'lng' => 20.628567],
            ['id' => 18, 'name' => 'Opole', 'lat' => 50.675106, 'lng' => 17.921297],
            ['id' => 19, 'name' => 'Rzeszów', 'lat' => 50.041186, 'lng' => 21.999119],
            ['id' => 20, 'name' => 'Toruń', 'lat' => 53.013790, 'lng' => 18.598443],
            ['id' => 21, 'name' => 'Wałbrzych', 'lat' => 50.784009, 'lng' => 16.284355],

        ]);
    }
}
