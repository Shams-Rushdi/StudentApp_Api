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
        Schema::create('extra_curicullumns', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->string('publication/Certificate');
            $table->string('date_actived');
            $table->string('search_ability');
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
        Schema::dropIfExists('extra_curicullumns');
    }
};
