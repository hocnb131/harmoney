<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment')
        ->insert(
            [
            'ticket_id' => '121',
            'user_id' => '21',
            'paymentMethod'=>'abc',
            'amount'=>'3',
            'status'=>'2',
        
            ],   
        );
    }
}
