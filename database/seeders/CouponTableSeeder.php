<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupon')
        ->insert(
            [
            'code' => 12345,
            // 'started_at'=>Carbon::parse(7-2022-6),
            'started_at'=> '2022-02-01',
            'ended_at'=> '2022-02-03',
            'percent'=>60,
            'amount'=>50000,
            'used'=> 0,
            ],
        );
        DB::table('coupon')
        ->insert(    
            [
            'code' => 53214,
                // 'started_at'=>Carbon::parse(7-2022-6),
            'started_at'=> '2022-02-02',
            'ended_at'=> '2022-03-03',
            'percent'=>70,
            'amount'=>60000,
            'used'=> 1,
            ],   
        );
        DB::table('coupon')
        ->insert(
            [
            'code' => 12345,
            // 'started_at'=>Carbon::parse(7-2022-6),
            'started_at'=> '2022-02-01',
            'ended_at'=> '2022-02-03',
            'percent'=>60,
            'amount'=>50000,
            'used'=> 0,
            ],
        );
    }
}
