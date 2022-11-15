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
        Schema::create('mobile_legend_orders', function (Blueprint $table) {
            $table->id();
            $table->string('game_user_id');
            $table->string('zone_id');
            $table->string('price');
            $table->string('order_status')->enum('pending', 'approved', 'completed', 'canceled')->default('pending');
            $table->foreignId('mobile_legend_item_id')->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('mobile_legend_orders');
    }
};
