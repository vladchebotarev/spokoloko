<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(ServiceTypesTableSeeder::class);
        /*$this->call(CitiesTableSeeder::class);
        $this->call(EventTypesTableSeeder::class);
        //$this->call(PackagesTableSeeder::class);
        $this->call(VenueAmenitiesTableSeeder::class);
        $this->call(VenueFeaturesTableSeeder::class);
        $this->call(VenueRulesTableSeeder::class);*/
        $this->call(VenueStylesTableSeeder::class);
        $this->call(VenueTypesTableSeeder::class);
    }
}
