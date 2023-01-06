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
        Schema::create('universities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('university_name');
            $table->string('university_address');
            $table->string('university_city');
            $table->string('university_country');
            $table->string('deadline');
            $table->string('degree');
            $table->string('major');
            $table->string('eng_requirement');
            $table->string('other_requirement');
            $table->string('gpa_requirement');
            $table->string('education_cost');
            $table->string('sop');
            $table->string('acceptance_rate');
            $table->string('application_fee');
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
        Schema::dropIfExists('universities');
    }
};
