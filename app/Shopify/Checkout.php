<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    protected $table = 'shopify_checkouts';
    public $timestamps = true;
    public $fillable = ['order_id'];
    protected $casts = [
        'billing_address' => 'array',
        'gift_cards' => 'array',
        'line_items' => 'array',
        'shipping_address' => 'array',
        'tax_lines' => 'array',
        'order' => 'array',
        'payments' => 'array',
        'discount_codes' => 'array',
        'fulfillments' => 'array',
        'note_attributes' => 'array',
        'payments' => 'array',
        'line_items' => 'array',
        'tax_manipulations' => 'array',
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
