<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopInvitation extends Model 
{

    protected $table = 'shopify_shops_invitations';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}