<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',25);
            $table->string('last_name',25);
            $table->string('email',50)->unique();
            $table->string('password');
            $table->string('type', 25);
            $table->string('address',120);
            $table->string('city',30);
            $table->string('phone',30);
            $table->string('cnic',20);
            $table->date('date_of_birth');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
