<?php

use Illuminate\Database\Seeder;

class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('devices')->insert([
            'localization' => 'Central Garden',
            'status' => 'D',
            'TimeActive' => 30,
            'fullTimeIrrigation'=>60,
            'created_at' => date('2019-07-12 16:27:s')

        ]);
         DB::table('devices')->insert([
            'localization' => 'East Garden',
            'status' => 'D',
            'TimeActive' => 30,
            'fullTimeIrrigation'=>60,
            'created_at' => date('2019-07-12 16:27:s')

        ]);
    }
}
