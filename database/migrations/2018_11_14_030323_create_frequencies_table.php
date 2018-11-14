<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrequenciesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('frequencies', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('presence');
            $table->date('date');
            $table->integer('student_id')->unsigned();
            $table->integer('separetedClass_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('frequencies_');
    }
}
