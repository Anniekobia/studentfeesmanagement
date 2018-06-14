<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_number')->unsigned();;
            $table->date('date_of_payment');
            $table->double('amount');
            $table->timestamps();
        });
//        Schema::table('fees', function(Blueprint $table) {
//            $table->foreign('student_number')->references('student_number')->on('students');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
