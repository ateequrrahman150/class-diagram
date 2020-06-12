<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',30);
            $table->string('last_name',30);
            $table->string('email')->unique();
            $table->string('address',120);
            $table->string('city',30);
            $table->string('phone',30);
            $table->string('cnic',25)->unique();
            $table->date('date_of_birth');
            $table->string('mall_name',30);
            $table->string('mall_address',120);
            $table->string('mall_city',30);
            $table->integer('no_of_shops', false, true)->length(10);
            $table->integer('no_of_floors', false, true)->length(10);
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
        Schema::dropIfExists('requests');
    }
}
