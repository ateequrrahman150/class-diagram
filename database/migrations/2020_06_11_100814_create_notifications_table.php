<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('floor_id');
            $table->foreign('floor_id')->references('floor_id')->on('shops');
            $table->unsignedBigInteger('mall_id');
            $table->foreign('mall_id')->references('mall_id')->on('shops');
            $table->foreignId('shop_id')->constrained('shops');
            $table->foreignId('product_id')->constrained('products');
            $table->string('title',30);
            $table->string('content',120);
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('status',20);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('notifications');
    }
}
