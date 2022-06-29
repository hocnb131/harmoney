<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')
        ->insert(
            [
            'status' => 1,
            'content' => 'abc',
            'slug'=>'abc',
            'name'=>'abc',
            'nameEn'=>1,
            'thumbnail'=>'abc',
            // 'total_branch'=>'',
            ],   
        );
      
    }
}
