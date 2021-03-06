<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckMoneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_money', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('point_amount');
            $table->unsignedBigInteger('student_id');
            $table->timestamps();
        });


/*        Schema::table('check_money', function (Blueprint $table) {
            $table->foreign('student_id')
             ->references('id')
             ->on('students')
             ->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_money');
    }
}
