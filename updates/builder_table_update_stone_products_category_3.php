<?php namespace Stone\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStoneProductsCategory3 extends Migration
{
    public function up()
    {
        Schema::table('stone_products_category', function($table)
        {
            $table->boolean('is_visible');
        });
    }
    
    public function down()
    {
        Schema::table('stone_products_category', function($table)
        {
            $table->dropColumn('is_visible');
        });
    }
}
