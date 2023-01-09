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
        Schema::create('student_english_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->string('test_type');
            $table->string('test_Date');
            $table->string('test_Score');
            $table->date('end_date');
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
        Schema::dropIfExists('student_english_tests');
    }
};
