<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collect extends Model 
{

    protected $table = 'shopify_collects';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}