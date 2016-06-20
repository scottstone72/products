<?php namespace Stone\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateStoneProductsProduct extends Migration
{
    public function up()
    {
        Schema::create('stone_products_product', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('product_name', 256);
            $table->text('product_description')->nullable();
            $table->integer('product_category')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stone_products_product');
    }
}
