<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service')
        ->insert(
            [
            'name' => 'Day la ten',
            'icon' => 'Icon day',
            'room_id'=>'1',
            'serviceType'=>'Loai dich vu',
            ],   
        );
      
    }
}
