<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malls', function (Blueprint $table) {
        
            $table->id();
            $table->string('name',30);
            $table->string('address',120);            
            $table->integer('no_of_shops', false, true)->length(10);
            $table->integer('no_of_floors', false, true)->length(10);
            $table->time('opening_time',0)->nullable();
            $table->time('closing_time',0)->nullable();
            $table->foreignId('mall_admin_id')->constrained('users');
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
        Schema::dropIfExists('malls');
    }
}
