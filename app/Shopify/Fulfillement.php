<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fulfillement extends Model 
{

    protected $table = 'shopify_fulfillement';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}