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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('scholership_name');
            $table->string('scholership_available');
            $table->string('scholership_degree');
            $table->string('scholership_major');
            $table->string('scholership_cgpa'); 
            $table->string('scholership_details');
            $table->date('scholership_deadline');
            $table->unsignedBigInteger('university_id')->nullable();
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
        Schema::dropIfExists('scholarships');
    }
};
