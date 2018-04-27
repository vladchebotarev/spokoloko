<?php

use Illuminate\Database\Seeder;

class ServiceSubtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicesubtypes')->insert([
            ['service_type_id' => 1, 'service_subtype_id' => 1, 'name' => ''], // 1 => Catering
            ['service_type_id' => 1, 'service_subtype_id' => 2, 'name' => ''],
            ['service_type_id' => 1, 'service_subtype_id' => 3, 'name' => ''],
            ['service_type_id' => 1, 'service_subtype_id' => 4, 'name' => ''],
            ['service_type_id' => 1, 'service_subtype_id' => 5, 'name' => ''],
            ['service_type_id' => 2, 'service_subtype_id' => 1, 'name' => ''], // 2 => Agencje eventowe
            ['service_type_id' => 2, 'service_subtype_id' => 2, 'name' => ''],
            ['service_type_id' => 2, 'service_subtype_id' => 3, 'name' => ''],
            ['service_type_id' => 2, 'service_subtype_id' => 4, 'name' => ''],
            ['service_type_id' => 2, 'service_subtype_id' => 5, 'name' => ''],
            ['service_type_id' => 3, 'service_subtype_id' => 1, 'name' => ''], // 3 => Muzyka
            ['service_type_id' => 3, 'service_subtype_id' => 2, 'name' => ''],
            ['service_type_id' => 3, 'service_subtype_id' => 3, 'name' => ''],
            ['service_type_id' => 3, 'service_subtype_id' => 4, 'name' => ''],
            ['service_type_id' => 3, 'service_subtype_id' => 5, 'name' => ''],
            ['service_type_id' => 4, 'service_subtype_id' => 1, 'name' => ''], // 4 => Foto i wideo
            ['service_type_id' => 4, 'service_subtype_id' => 2, 'name' => ''],
            ['service_type_id' => 4, 'service_subtype_id' => 3, 'name' => ''],
            ['service_type_id' => 4, 'service_subtype_id' => 4, 'name' => ''],
            ['service_type_id' => 4, 'service_subtype_id' => 5, 'name' => ''],
            ['service_type_id' => 5, 'service_subtype_id' => 1, 'name' => ''], // 5 => Inne
            ['service_type_id' => 5, 'service_subtype_id' => 2, 'name' => ''],
            ['service_type_id' => 5, 'service_subtype_id' => 3, 'name' => ''],
            ['service_type_id' => 5, 'service_subtype_id' => 4, 'name' => ''],
            ['service_type_id' => 5, 'service_subtype_id' => 5, 'name' => ''],
        ]);
    }
}
