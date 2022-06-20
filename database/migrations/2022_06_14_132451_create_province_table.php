<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('province', function (Blueprint $table) {
            $table->id();
            $table->integer('name');
            // $table->date('create_at');
            $table->char('create_at');
            $table->integer('status');
            $table->char('thumbnail',255);
            $table->char('thumbnailDescription',255);
            $table->char('description',255);           
            $table->timestamps();
            // $table->integer('total_branch');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('province');
    }
};
