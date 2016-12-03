<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
           'slug' => 'admin', 'name' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'slug' => 'manager', 'name' => 'Manager',
        ]);
        DB::table('roles')->insert([
            'slug' => 'user', 'name' => 'User',
        ]);
    }
}
