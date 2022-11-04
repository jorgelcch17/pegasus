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
        Schema::create('ff_orders', function (Blueprint $table) {
            $table->id();
            $table->string('id_account');
            $table->string('nickname_account');
            $table->string('price');
            $table->string('order_status')->enum('pending','approved', 'completed', 'canceled')->default('pending');
            $table->foreignId('freefire_item_id')->constrained();
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
        Schema::dropIfExists('ff_orders');
    }
};
