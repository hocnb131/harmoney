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
            $table->id();
            $table->char('name');
            $table->char('email');
            $table->char('address');
            $table->integer('phoneNumber');
            $table->char('description')->nullable();
            $table->char('thumbnail')->nullable();
            $table->char('thumbnailDescription');
            $table->char('slug');
            $table->integer('status');
            $table->char('nameEn');
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
