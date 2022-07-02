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
        Schema::create('Coupon', function (Blueprint $table) {
            $table->id();
            $table->char('code');
            $table->date('started_at');
            $table->date('ended_at');
            $table->integer('percent');
            $table->integer('amount');
            $table->json('used');
            $table->integer('ticket_id');                      
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
        Schema::dropIfExists('Coupon');
    }
};