<?php

namespace App\Apps\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model 
{

    protected $table = 'shopify_provinces';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}