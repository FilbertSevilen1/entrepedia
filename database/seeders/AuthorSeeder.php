<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('authors')->insert([
            'name' => 'Admin',
            'email'=>'admin@gmail.com',
            'dob' => '12-12-2020',
            'gender'=>'male',
            'password'=> Hash::make('12345678'),
        ]);
    }
}
