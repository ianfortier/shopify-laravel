<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model 
{

    protected $table = 'shopify_orders_items';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}