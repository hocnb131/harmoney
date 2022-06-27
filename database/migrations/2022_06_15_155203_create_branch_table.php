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
            $table->char('thumbnail');
            $table->char('thumbnailDescription');
            $table->char('description');
            $table->integer('status');
            $table->char('address');
            $table->integer('phoneNumber');
            $table->char('email');
            $table->char('name');
            $table->char('nameEn');
            $table->char('slug');
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
