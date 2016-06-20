<?php namespace Stone\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateStoneProductsProduct5 extends Migration
{
    public function up()
    {
        Schema::table('stone_products_product', function($table)
        {
            $table->boolean('available');
            $table->boolean('new');
            $table->boolean('soldout');
            $table->boolean('limited');
            $table->dropColumn('availability');
        });
    }
    
    public function down()
    {
        Schema::table('stone_products_product', function($table)
        {
            $table->dropColumn('available');
            $table->dropColumn('new');
            $table->dropColumn('soldout');
            $table->dropColumn('limited');
            $table->string('availability', 64);
        });
    }
}
