<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationsShips extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('adresses', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities');
        });

        Schema::table('cities', function (Blueprint $table) {
            $table->foreign('estate_id')->references('id')->on('estates');
        });

        Schema::table('administrators', function (Blueprint $table) {
            $table->foreign('address_id')->references('id')->on('adresses');
        });

        Schema::table('directors', function (Blueprint $table) {
            $table->foreign('address_id')->references('id')->on('adresses');
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->foreign('address_id')->references('id')->on('adresses');
        });

        Schema::table('students', function (Blueprint $table) {
            $table->foreign('address_id')->references('id')->on('adresses');
        });

        Schema::table('teacher_schoolsubject', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('schoolsubject_id')->references('id')->on('schoolsubjects');
        });

        Schema::table('student_classe', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('classe_id')->references('id')->on('classes');
        });

        Schema::table('frequencies', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('separetedClass_id')->references('id')->on('separetedclasses');
        });

        Schema::table('tests', function (Blueprint $table) {
            $table->foreign('rating_id')->references('id')->on('ratings');
            $table->foreign('separetedClass_id')->references('id')->on('separetedclasses');
        });

        Schema::table('separetedclass_classe', function (Blueprint $table) {
            $table->foreign('classe_id')->references('id')->on('classes');
            $table->foreign('separetedClass_id')->references('id')->on('separetedclasses');
        });

        Schema::table('separetedclasses', function (Blueprint $table) {
            $table->foreign('schoolsubject_id')->references('id')->on('schoolsubjects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
