<?php

use Illuminate\Database\Seeder;

class EventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eventtypes')->insert([
            ['id' => 1, 'name' => 'Impreza zamknięta'],
            ['id' => 2, 'name' => 'Urodziny'],
            ['id' => 3, 'name' => 'Impreza firmowa'],
            ['id' => 4, 'name' => 'Impreza dla dzieci'],
            ['id' => 5, 'name' => 'Sylwestr'],
            ['id' => 6, 'name' => 'Bal karnawałowy'],
            ['id' => 7, 'name' => 'Bankiet'],
            ['id' => 8, 'name' => 'Wesele'],
            ['id' => 9, 'name' => 'Chrzty'],
            ['id' => 10, 'name' => 'Komunia'],
            ['id' => 11, 'name' => 'Studniówka'],
            ['id' => 12, 'name' => 'Stypa'],
            ['id' => 13, 'name' => 'Konferencja'],
            ['id' => 14, 'name' => 'Wystawa'],
            ['id' => 15, 'name' => 'Koncert'],
            ['id' => 16, 'name' => 'Open-air'],
            ['id' => 17, 'name' => 'Targi'],
            ['id' => 18, 'name' => 'Festival'],
            ['id' => 19, 'name' => 'Fashion show'],
            ['id' => 20, 'name' => 'Wydarzenie sportowe'],
            ['id' => 21, 'name' => 'Piknik'],
            ['id' => 22, 'name' => 'Impreza koktajlowa'],
            ['id' => 23, 'name' => 'Kolacja/obiad firmowa (-y)'],
            ['id' => 24, 'name' => 'Kolacja/obiad rodzinna(-y)'],
            ['id' => 25, 'name' => 'Happy Hour'],
            ['id' => 26, 'name' => 'Baby Shower'],
            ['id' => 27, 'name' => 'Kolacja Zamknięta'],
            ['id' => 28, 'name' => 'Wydarzenie Sportowe'],
            ['id' => 29, 'name' => 'Meet-up'],
            ['id' => 30, 'name' => 'Szkolenie'],
            ['id' => 31, 'name' => 'Prezentacja'],
            ['id' => 32, 'name' => 'Rozmowa rekrutacyjna'],
            ['id' => 33, 'name' => 'Spotkanie biznesowe'],
            ['id' => 34, 'name' => 'Spotkanie firmowe'],
            ['id' => 35, 'name' => 'Sesja zdjęciowa'],
            ['id' => 36, 'name' => 'Sesja filmowa'],
            ['id' => 37, 'name' => 'Kasting'],
            ['id' => 38, 'name' => 'Akcja Marketingowa'],
            ['id' => 39, 'name' => 'Flashmob'],
            ['id' => 40, 'name' => 'Pop-up'],
            ['id' => 41, 'name' => 'Performance'],
            //TODO

        ]);
    }
}
