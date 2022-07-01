<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserTableSeeder::class,
            ProvinceTableSeeder::class,
            BranchTableSeeder::class,
            CouponTableSeeder::class,
            PaymentTableSeeder::class,
            BlogTableSeeder::class,
            RoomTableSeeder::class,
            TicketTableSeeder::class,
            ReviewTableSeeder::class,
            ServiceTableSeeder::class,
        ]);
    }
}