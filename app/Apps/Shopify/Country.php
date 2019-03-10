<?php

namespace App\Apps\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model 
{

    protected $table = 'shopify_countries';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}