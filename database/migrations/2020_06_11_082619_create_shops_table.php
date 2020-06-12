<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_admin_id')->constrained('users');
            $table->foreignId('floor_id')->constrained('floors');
            $table->unsignedBigInteger('mall_id');
            $table->foreign('mall_id')->references('mall_id')->on('floors');
            $table->string('shop_name', 30);
            $table->string('status', 30);
            $table->integer('shop_number', false, true)->length(10);
            $table->time('opening_time',0)->nullable();
            $table->time('closing_time',0)->nullable();
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
        Schema::dropIfExists('shops');
    }
}
