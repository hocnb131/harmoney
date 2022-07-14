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
        Schema::create('Room', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->integer('adults');
            $table->integer('children');
            $table->char('description')->nullable();
            $table->date('calendar');
            $table->char('thumbnail')->nullable();
            $table->json('thumbnailDescription')->nullable();
            $table->double('price');
            $table->char('bedType');
            $table->integer('area');
            $table->char('slug')->nullable();
            $table->integer('nameEn')->nullable();
            $table->integer('status');
            $table->integer('branch_id');
            $table->integer('roomType');
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
        Schema::dropIfExists('Room');
    }
};
