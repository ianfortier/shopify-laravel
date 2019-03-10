<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    protected $table = 'shopify_shops';
    public $timestamps = true;

    use SoftDeletes;

    protected $primaryKey = 'shop_id';
    protected $dates = ['deleted_at'];
    protected $hidden = ['token'];

    public function customer()
    {
        return $this->belongsTo('App\Shopify\Customer', 'customer_id', 'customer_id');
    }
}
