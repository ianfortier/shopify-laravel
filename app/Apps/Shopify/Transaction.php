<?php

namespace App\Apps\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model 
{

    protected $table = 'shopify_transactions';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}