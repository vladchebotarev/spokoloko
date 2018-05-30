<?php

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            ['id' => 1, 'name' => 'Silver', 'description' => 'Silver Package', 'price' => 99.90],
            ['id' => 2, 'name' => 'Gold', 'description' => 'Gold Package', 'price' => 199.90],

        ]);
    }
}
