<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chart_log', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('wiki_id');
            $table->integer('price');
            $table->integer('amount');
            $table->integer('kotteri');
            $table->integer('soup');
            $table->integer('topping');
            $table->integer('nodle_type');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('wiki_id')->references('id')->on('wiki');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chart_log');
    }
}
