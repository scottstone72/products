<?php namespace Stone\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStoneProductsProduct3 extends Migration
{
    public function up()
    {
        Schema::table('stone_products_product', function($table)
        {
            $table->renameColumn('product_category_id', 'category_id');
        });
    }
    
    public function down()
    {
        Schema::table('stone_products_product', function($table)
        {
            $table->renameColumn('category_id', 'product_category_id');
        });
    }
}
