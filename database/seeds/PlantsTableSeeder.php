<?php

use Illuminate\Database\Seeder;

class PlantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('plants')->insert([
            'type' => 'Aquatic Plants',
            'WaterAmount' => 10.00,
            'details' => 'This is an aquatic plant',
            'created_at' => date('2019-07-12 16:27:s')

        ]);    

        DB::table('plants')->insert([
            'type' => 'Indoor Plants',
            'WaterAmount' => 5.00,
            'details' => 'This is an indoor plant',
            'created_at' => date('2019-07-12 16:27:s')

        ]);      
    }
}
