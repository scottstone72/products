<?php namespace Stone\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStoneProductsCategory extends Migration
{
    public function up()
    {
        Schema::rename('stone_products_product', 'stone_products_category');
        Schema::table('stone_products_category', function($table)
        {
            $table->renameColumn('product_name', 'category_name');
            $table->renameColumn('product_description', 'category_description');
            $table->renameColumn('product_category_id', 'category_product_id');
        });
    }
    
    public function down()
    {
        Schema::rename('stone_products_category', 'stone_products_product');
        Schema::table('stone_products_product', function($table)
        {
            $table->renameColumn('category_name', 'product_name');
            $table->renameColumn('category_description', 'product_description');
            $table->renameColumn('category_product_id', 'product_category_id');
        });
    }
}
