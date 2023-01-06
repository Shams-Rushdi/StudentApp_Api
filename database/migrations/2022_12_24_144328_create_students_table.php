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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email');
            $table->date('dob');
            $table->string('address1');
            $table->string('address2');
            $table->string('zipcode');
            $table->string('state');
            $table->string('citizenship');
            $table->string('country');
            $table->string('city');
            $table->string('mobile_number');
            $table->string('user_id');
            $table->string('user_name');
            $table->string('user_password');
            $table->date('stored_on_table_date');
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
        Schema::dropIfExists('students');
    }
};
