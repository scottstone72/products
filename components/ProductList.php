<?php namespace Stone\Products\Components;

use Cms\Classes\ComponentBase;
use Stone\Products\Models\Category;
use Stone\Products\Models\Product;

class ProductList extends ComponentBase
{

    /**
     * @var collection Products
     */
    public $category;
    public $productList;

    public function componentDetails()
    {
        return [
            'name' => 'Product Listings',
            'description' => 'Provides a list of products to display.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['productList'] = Category::all();
    }

}