<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;

class Order extends Model
{
    protected $table = 'shopify_orders';
    public $timestamps = true;
    public $fillable = ['order_id'];
    protected $casts = [
        'billing_address' => 'array',
        'customer' => 'array',
        'client_details' => 'array',
        'discount_codes' => 'array',
        'fulfillments' => 'array',
        'line_items' => 'array',
        'note_attributes' => 'array',
        'payment_gateway_names' => 'array',
        'payment_details' => 'array',
        'refunds' => 'array',
        'shipping_address' => 'array',
        'shipping_lines' => 'array',
        'tax_lines' => 'array',
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    use SearchableTrait;

      /**
       * Searchable rules.
       *
       * @var array
       */
      protected $searchable = [
          'columns' => [
              'shopify_orders.order_id' => 500,
              'shopify_orders.name' => 500,
              'shopify_orders.billing_address' => 100,
              'shopify_orders.shipping_address' => 100,
              'shopify_orders.customer' => 100,
          ]
      ];

      public function shop()
      {
          return $this->belongsTo('App\Shopify\Shop', 'shop_id', 'shop_id');
      }


}
