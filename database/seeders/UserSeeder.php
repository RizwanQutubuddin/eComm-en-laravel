<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'name'=>'Uzaif',
            'email'=>'uzaif@gmail.com',
            'password'=>Hash::make('Uzaif@123')

        ]);
    }
}
