<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CollectionListing extends Model 
{

    protected $table = 'shopify_collection_listings';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}