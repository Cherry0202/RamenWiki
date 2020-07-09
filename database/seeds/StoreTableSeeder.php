<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store')->insert([
            'store_name' => 'aaa',
            'address' => 'aaa',
            'open_now' => 1,
            'phone_number' => 111000333,
            'website' => 'aaa',
            'photo' => 'aaa',
        ]);
    }
}
