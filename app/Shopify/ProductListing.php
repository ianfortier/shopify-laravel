<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductListing extends Model 
{

    protected $table = 'shopify_product_listings';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}