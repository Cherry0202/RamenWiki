<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultChart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_chart', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wiki_id');
            $table->integer('avg_price');
            $table->integer('avg_amount');
            $table->integer('avg_kotteri');
            $table->integer('avg_soup');
            $table->integer('avg_topping');
            $table->integer('avg_noodle_type');
            $table->integer('sum_people_price');
            $table->foreign('wiki_id')->references('id')->on('wiki');
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
        Schema::dropIfExists('result_chart');
    }
}
