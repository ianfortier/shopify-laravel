<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriceRule extends Model
{

    protected $table = 'shopify_price_rules';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $casts = [
        'prerequisite_saved_search_ids' => 'array',
        'prerequisite_customer_ids' => 'array',
        'prerequisite_subtotal_range' => 'array',
        'prerequisite_shipping_price_range' => 'array',
        'prerequisite_quantity_range' => 'array',
        'entitled_product_ids' => 'array',
        'entitled_variant_ids' => 'array',
        'entitled_collection_ids' => 'array',
        'entitled_country_ids' => 'array',
    ];
}
