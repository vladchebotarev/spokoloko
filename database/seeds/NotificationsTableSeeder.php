<?php

use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
            ['id' => 1, 'name' => 'Email'],
            ['id' => 2, 'name' => 'SMS'],
            ['id' => 3, 'name' => 'Push'],

        ]);
    }
}
