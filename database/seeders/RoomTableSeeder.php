<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')
        ->insert(
            [
                'name' => 'thisname',
                'adults'=> '2',
                'children'=>'1214',
                'description' =>'Description',
                'calendar'=>'2022-09-08',
                'thumbnail' => 'thumnail',
              
                'price'=> '9999',
                'bedType'=>'TypeBed',
                'area' =>'123',
                'slug'=>'slug',
                'nameEn'=>'12',
                'status'=>'1231',
                'branch_id'=>'11111',
                'roomType'=>'12312'
            ],   
        );
      
    }
}
