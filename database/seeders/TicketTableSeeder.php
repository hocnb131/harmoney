<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket')
        ->insert(
            [
            'room_id' => '121',
            'payment_id' => '1211',
            'user_id'=>'131',
            'status'=>'551',
            ],   
        );
      
    }
}
