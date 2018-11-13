<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street');
            $table->string('number');
            $table->string('complement');
            $table->string('state');
            $table->string('city');
            $table->integer('cep');
            $table->integer('teacher_id');
            $table->integer('student_id');
            $table->integer('director_id');
            $table->integer('administrator_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
