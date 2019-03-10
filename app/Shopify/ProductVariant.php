<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;

class ProductVariant extends Model
{
    protected $table = 'shopify_products_variants';
    public $timestamps = true;

    protected $casts = [
      'metafield' => 'array',
    ];

    protected $fillable = ['variant_id'];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    use SearchableTrait;

      /**
       * Searchable rules.
       *
       * @var array
       */
      protected $searchable = [
          'columns' => [
              'shopify_products.title' => 500,
              'shopify_products.tags' => 50,
              'shopify_products_variants.sku' => 50,
              'shopify_products_variants.title' => 100,
          ],
          'joins' => [
              'shopify_products' => ['shopify_products_variants.product_id','shopify_products.product_id'],
          ],
      ];

    public function product()
    {
        return $this->belongsTo('App\Shopify\Product', 'product_id', 'product_id');
    }

    public function product_listing()
    {
        return $this->belongsTo('App\Shopify\ProductListing', 'product_id', 'product_id');
    }
}
