<?php namespace Stone\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStoneProductsProduct extends Migration
{
    public function up()
    {
        Schema::table('stone_products_product', function($table)
        {
            $table->renameColumn('product_category', 'product_category_id');
        });
    }
    
    public function down()
    {
        Schema::table('stone_products_product', function($table)
        {
            $table->renameColumn('product_category_id', 'product_category');
        });
    }
}
