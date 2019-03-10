<?php

namespace App\Shopify\Product\Variant;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVariant extends Model 
{

    protected $table = 'shopify_products_variants';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}