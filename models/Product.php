<?php namespace Stone\Products\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    protected $jsonable = [
      'product_description',
    ];

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stone_products_product';


    public $belongsTo = [
        'category' => ['Stone\Products\Models\Category'],
    ];
}