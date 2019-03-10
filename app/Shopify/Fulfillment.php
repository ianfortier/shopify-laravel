<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fulfillment extends Model
{

    protected $table = 'shopify_fulfillment';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    public $fillable = ['fulfillment_id'];
    protected $casts = [
        'line_items' => 'array',
        'receipt' => 'array',
        'tracking_numbers' => 'array',
        'tracking_urls' => 'array',
    ];
}
