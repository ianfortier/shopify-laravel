<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    protected $table = 'shopify_orders_items';
    public $timestamps = true;

    use SoftDeletes;

    protected $fillable = ['order_id', 'item_id'];
    protected $dates = ['deleted_at'];
    protected $casts = [
        'properties' => 'array',
        'tax_lines' => 'array',
    ];
}
