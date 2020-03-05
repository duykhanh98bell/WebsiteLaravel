<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('pro_name',100);
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('style_id');
            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('colors_id');
            $table->unsignedBigInteger('brand_id');
            $table->integer('price');
            $table->integer('sale_off');
            $table->string('images', 100);
            $table->text('description');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('product');
    }
}
