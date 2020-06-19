<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chart_log_id');
            $table->text('text');
            $table->integer('user_id');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->text('deleated_at');
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('chart_log_id')->references('id')->on('chart_log');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review');
    }
}
