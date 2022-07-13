<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')
        ->insert(
            [
            'fullName' => 'Nguyen Cong Quyen',
            'email' => 'quyen@gmail.com',
            'phoneNumber'=> '0123456789',
            'password' => bcrypt('hehe'),
            // 'role' => 'admin',
            'status' => 0
            ],   
        );
        DB::table('user')->insert(
            [
            'fullName' => 'Dinh Thanh Hai',
            'email' => 'hai@gmail.com',
            'phoneNumber'=> '0123456789',
            'password' => bcrypt('hehe'),
            // 'role' => 'editor',
            'status' => 1
            ],
        );
        DB::table('user')->insert(
            [
            'fullName' => 'Nguyen Ba Hoc',
            'email' => 'hoc@gmail.com',
            'phoneNumber'=> '0123456789',
            'password' => bcrypt('hehe'),

            'status' => 1
            ],
        );
        DB::table('user')->insert(
            [
            'fullName' => 'Tran Phuoc Dat',
            'email' => 'dat@gmail.com',
            'phoneNumber'=> '0123456789',
            'password' => bcrypt('hehe'),

            'status' => 0
            ],
        );
            
    }
}
