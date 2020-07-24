<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'aaa', 
            'password' => 'abcdefg',
            'email' => 'aaa@test',
            'price' => 3,
            'volume' => 3,
            'kotteri' => 3,
            'soup' => 3,
            'topping' => 3,
            'noodle_type' => 3,
        ]);
    }
}
