<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{

    protected $table = 'shopify_customers';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('customer_id', 'shop_id', 'addresses', 'default_address', 'email', 'phone', 'first_name', 'multipass_identifier', 'last_name', 'note', 'tags');

    protected $casts = [
        'addresses' => 'array',
        'default_address' => 'array',
        'metafield' => 'array',
        'note_attributes' => 'array',
    ];
}
