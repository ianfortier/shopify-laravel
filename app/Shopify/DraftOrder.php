<?php

namespace App\Shopify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;

class DraftOrder extends Model
{

    protected $table = 'shopify_draft_orders';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('draft_order_id', 'shipping_address', 'billing_address', 'note', 'note_attributes', 'email', 'currency', 'line_items', 'tags');
    protected $casts = [
        'customer' => 'array',
        'shipping_address' => 'array',
        'billing_address' => 'array',
        'note_attributes' => 'array',
        'applied_discount' => 'array',
        'line_items' => 'array',
        'shipping_line' => 'array',
        'tax_lines' => 'array',
    ];

    use SearchableTrait;

      /**
       * Searchable rules.
       *
       * @var array
       */
      protected $searchable = [
          'columns' => [
              'shopify_draft_orders.draft_order_id' => 200,
              'shopify_draft_orders.order_id' => 200,
              'shopify_draft_orders.name' => 200,
              'shopify_draft_orders.note' => 50,
              'shopify_draft_orders.email' => 50,
              'shopify_draft_orders.shipping_address' => 50,
              'shopify_draft_orders.billing_address' => 50,
          ]
      ];

      public function order()
      {
          return $this->belongsTo('App\Shopify\Order', 'order_id', 'order_id');
      }
}
