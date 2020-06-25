<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWikiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wiki', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('store_id');
            $table->foreign('store_id')
                    ->references('store_id')
                    ->on('store');
            $table->varchar('store_name');
            $table->foreign('store_name')
                    ->references('store_name')
                    ->on('store');
            $table->varchar('text');
            $table->int('user_history');
            $table->foreign('user_history.id')
                    ->references('store.id')
                    ->on('user_history');
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
        Schema::dropIfExists('wiki');
    }
}
