<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWikiLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wiki_log', function (Blueprint $table) {
            $table->integer('wiki_id');
            $table->integer('user_id');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
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
        Schema::dropIfExists('wiki_log');
    }
}
