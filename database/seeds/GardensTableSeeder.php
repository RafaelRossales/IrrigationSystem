<?php

use Illuminate\Database\Seeder;

class GardensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gardens')->insert([
            'plants_id' => 1,
            'devices_id' => 1,
            'local' => 'Central Garden',
            'humid' => 85.00,
            'created_at' => date('2019-07-12 16:27:s')

        ]);
    }
}
