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
        Schema::create('branch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name');
            $table->char('email');
            $table->char('address');
            $table->integer('phoneNumber');
            $table->longText('description')->nullable();
            $table->char('thumbnail')->nullable();
            $table->char('thumbnailDescription');
            $table->char('slug');
            $table->integer('status');
            $table->char('nameEn');
            $table->bigInteger('province_id');
            // $table->foreignId('province_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch');
    }
};
