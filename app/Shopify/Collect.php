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

    public function product()
    {
        return $this->belongsTo('App\Shopify\Product', 'product_id', 'product_id');
    }

    public function collection()
    {
        return $this->belongsTo('App\Shopify\CustomCollection', 'collection_id', 'collection_id');
    }
}
