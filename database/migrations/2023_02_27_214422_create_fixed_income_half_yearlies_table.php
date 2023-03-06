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
        Schema::create('fixed_income_half_yearlies', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned()->index();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->float('amount');
            $table->integer('starting_month_id')->unsigned()->index();
            $table->date('date')->nullable();
            $table->timestamps();
            //Relation
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('starting_month_id')->references('id')->on('months');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixed_income_half_yearlies');
    }
};
