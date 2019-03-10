<?php

namespace App\Apps\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Webhook extends Model 
{

    protected $table = 'shopify_webhooks';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}