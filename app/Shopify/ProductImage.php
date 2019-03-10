<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{

    protected $table = 'shopify_products_images';
    public $timestamps = true;

    use SoftDeletes;

    protected $fillable = ['image_id'];
    protected $dates = ['deleted_at'];
    protected $casts = [
        'variant_ids' => 'array',
    ];

}
