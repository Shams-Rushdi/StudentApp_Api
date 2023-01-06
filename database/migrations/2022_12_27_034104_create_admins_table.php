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
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('first_name');
            $table->string('username');
            $table->string('phonenumber1');
            $table->string('phonenumber2');
            $table->string('nid');
            $table->string('degree');
            $table->string('gender');
            $table->string('nationality');
            $table->string('email');
            $table->date('joiningdate');
            $table->string('role');
            $table->string('password');
            $table->string('phonenumber');
            $table->string('address');
            $table->string('image');
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
        Schema::dropIfExists('admins');
    }
};
