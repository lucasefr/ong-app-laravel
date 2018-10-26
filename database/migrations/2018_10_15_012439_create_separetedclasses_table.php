<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeparetedclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('separetedclasses', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('hour',['first','second']);
            $table->enum('day',['monday','tuesday','wednesday','thursday','friday']);
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
        Schema::dropIfExists('separetedclasses');
    }
}
