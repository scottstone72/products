<?php namespace Stone\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStoneProductsProduct4 extends Migration
{
    public function up()
    {
        Schema::table('stone_products_product', function($table)
        {
            $table->string('availability', 64);
        });
    }
    
    public function down()
    {
        Schema::table('stone_products_product', function($table)
        {
            $table->dropColumn('availability');
        });
    }
}
