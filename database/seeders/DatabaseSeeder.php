<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           [
            'id' => 1,
            'first_name' => 'Steve',
            'last_name' => 'Marks',
            'email' => 'steven.marks@bvswebdesign.co.uk',
            'password' => bcrypt('Erding3r!'),
            'is_active' => '1',
            'is_super_admin' => '1',
           ]
           ]);
    }
}
