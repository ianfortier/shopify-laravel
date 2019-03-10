<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiscountPrice extends Model 
{

    protected $table = 'shopify_discounts_price';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('group_name', 'minimum_quantity', 'maximum_quantity', 'value_type', 'value');

}