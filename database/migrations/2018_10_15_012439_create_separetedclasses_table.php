<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeparetedclassesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('separetedclasses', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('hour', ['first', 'second']);
            $table->enum('day', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday']);
            $table->integer('schoolsubject_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('separetedclasses');
    }
}
