<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomCollection extends Model 
{

    protected $table = 'shopify_custom_collections';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}