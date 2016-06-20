<?php namespace Stone\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStoneProductsCategory2 extends Migration
{
    public function up()
    {
        Schema::table('stone_products_category', function($table)
        {
            $table->dropColumn('category_product_id');
        });
    }
    
    public function down()
    {
        Schema::table('stone_products_category', function($table)
        {
            $table->integer('category_product_id')->nullable()->unsigned();
        });
    }
}
