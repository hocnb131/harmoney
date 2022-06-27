<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('province')
        ->insert(
            [
            'name' => 1,
            // 'create_at'=>'10-10-1995',
            // 'create_at'=>Carbon::parse(2022-15-6),
            'status' => 1,
            'thumbnail'=>'hinh1',
            'thumbnailDescription'=>'hinh1',
            'description'=>'hinh1',
            // 'total_branch'=>'',
            ],   
        );
        DB::table('province')
        ->insert(
            [
            'name' => 2,
            // 'create_at'=>'10-10-1995',
            // 'create_at'=>Carbon::parse(2022-16-7),
            'status' => 0,
            'thumbnail'=>'hinh2',
            'thumbnailDescription'=>'hinh2',
            'description'=>'hinh2',
            // 'total_branch'=>'',

            ],   
        );
    }
}
