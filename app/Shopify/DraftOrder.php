<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DraftOrder extends Model 
{

    protected $table = 'shopify_draft_orders';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('shipping_address', 'billing_address', 'note', 'note_attributes', 'email', 'currency', 'line_items', 'tags');

}