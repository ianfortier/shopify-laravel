<?php

namespace App\Apps\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model 
{

    protected $table = 'shopify_addresses';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}