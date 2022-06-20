<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
        ->insert(
            [
            'name' => 'Nguyen Cong Quyen',
            'email' => 'quyen@gmail.com',
            'password' => bcrypt('hehe'),
            'role' => 'admin'
            ],   
        );
        DB::table('users')->insert(
            [
            'name' => 'Dinh Thanh Hai',
            'email' => 'hai@gmail.com',
            'password' => bcrypt('hehe'),
            'role' => 'editor'
            ],
        );
        DB::table('users')->insert(
            [
            'name' => 'Nguyen Ba Hoc',
            'email' => 'hoc@gmail.com',
            'password' => bcrypt('hehe'),
            'role' => 'write'
            ],
        );
        DB::table('users')->insert(
            [
            'name' => 'Tran Phuoc Dat',
            'email' => 'dat@gmail.com',
            'password' => bcrypt('hehe'),
            'role' => 'write'
            ],
        );
            
            // [
            // 'name' => 'write',
            // 'email' => 'hoc@gmail.com',
            // 'password' => bcrypt('hehe'),
            // ],
            // [
            // 'name' => 'write',
            // 'email' => 'dat@gmail.com',
            // 'password' => bcrypt('hehe'),
            // ]
   
    }
}
