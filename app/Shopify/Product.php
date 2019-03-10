<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model 
{

    protected $table = 'shopify_products';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function product_variants()
    {
        return $this->hasMany('App\Shopify\Product\Variant\ProductVariant');
    }

}