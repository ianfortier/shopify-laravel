<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FulfillmentService extends Model
{

    protected $table = 'shopify_fulfillment_services';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    public $fillable = ['fulfillment_service_id'];

}
