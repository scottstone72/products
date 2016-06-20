<?php namespace Stone\Products;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return [
        'Stone\Products\Components\ProductList' => 'productList'
      ];
    }

    public function registerSettings()
    {
      return [];
    }
}
