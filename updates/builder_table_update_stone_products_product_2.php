<?php namespace Stone\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStoneProductsProduct2 extends Migration
{
    public function up()
    {
        Schema::rename('stone_products_', 'stone_products_product');
    }
    
    public function down()
    {
        Schema::rename('stone_products_product', 'stone_products_');
    }
}
