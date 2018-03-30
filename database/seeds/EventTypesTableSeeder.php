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
            ['id' => 2, 'name' => 'Kolacja zamknięta'],
            ['id' => 3, 'name' => 'Konferencja'],
            ['id' => 4, 'name' => 'Impreza urodzinowa'],
            ['id' => 5, 'name' => 'Wesele'],
            //TODO

        ]);
    }
}
