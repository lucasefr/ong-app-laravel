<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeparetedClassClasseTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('separetedclass_classe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classe_id')->unsigned();
            $table->integer('separetedClass_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('separetedclass_classe');
    }
}
