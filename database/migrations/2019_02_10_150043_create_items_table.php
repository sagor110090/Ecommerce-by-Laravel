<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->integer('quantity');

            $table->string('size');
            $table->string('color');

            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();

            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');

            $table->foreign('size_id')
                ->references('id')->on('sizes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('items');
    }
}
