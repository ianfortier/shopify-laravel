<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    protected $table = 'shopify_products';
    public $timestamps = true;
    public $fillable = ['product_id'];

    protected $casts = [
        'images' => 'array',
        'options' => 'array',
        'variants' => 'array',
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function variants()
    {
        return $this->hasMany('App\Shopify\ProductVariant', 'product_id', 'product_id');
    }

    public function discount_prices()
    {
        return $this->hasMany('App\Shopify\DiscountPrice', 'product_id', 'product_id');
    }

    public function product_listing()
    {
        return $this->belongsTo('App\Shopify\ProductListing', 'product_id', 'product_id');
    }

    public function shop()
    {
        return $this->belongsTo('App\Shopify\Shop', 'shop_id', 'shop_id');
    }

    use SearchableTrait;

      /**
       * Searchable rules.
       *
       * @var array
       */
      protected $searchable = [
          'columns' => [
              'shopify_products.title' => 200,
              'shopify_products.tags' => 50,
              'shopify_products.product_type' => 50,
              'shopify_products.vendor' => 15,
      //        'shopify_products_variants.sku' => 200,
        //      'shopify_products_variants.title' => 100,
          ],
          'joins' => [
          //    'shopify_products_variants' => ['shopify_products.product_id','shopify_products_variants.product_id'],
          ],
      ];

}
