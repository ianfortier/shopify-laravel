<?php

namespace App\Apps\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Refund extends Model 
{

    protected $table = 'shopify_refunds';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}