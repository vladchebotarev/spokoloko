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
            ['id' => 1, 'name' => 'Przyjazne Dzieciom (0-10)'],
            ['id' => 2, 'name' => 'Przyjazne Nastolatkom (10-18)'],
            ['id' => 4, 'name' => 'Dozwolone Gotowanie (Live Cooking)'],
            ['id' => 5, 'name' => 'Dozwolony Catering Zewnętrzny'],
            ['id' => 6, 'name' => 'Możliwość Organizacji Imprezy w Okresie Ciszy Nocnej'],
            ['id' => 7, 'name' => 'Dozwolona Głośna Muzyka'],
            ['id' => 8, 'name' => 'Dozwolony Otwarty Ogień'],
            ['id' => 9, 'name' => 'Dozwolone Wniesienie Swojego Alkoholu'],
            ['id' => 10, 'name' => 'Palarnia w Lokalu'],
            ['id' => 11, 'name' => 'Palarnia na Zewnątrz'],
            ['id' => 12, 'name' => 'Dozwolona Nie Glośna Muzyka'],
            //TODO

        ]);
    }
}
