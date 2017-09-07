<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_options', function (Blueprint $table) {
            $table->increments('product_options_id');
            $table->integer('product_id')->unsigned();
            $table->integer('options_id')->unsigned();
            $table->integer('options_group_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('product_options', function($table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('options_id')->references('options_id')->on('options')->onDelete('cascade');
            $table->foreign('options_group_id')->references('options_group_id')->on('options_group')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_options');
    }
}
