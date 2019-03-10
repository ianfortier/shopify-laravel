<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyOrdersTable extends Migration {

	public function up()
	{
		Schema::create('shopify_orders', function(Blueprint $table) {
			$table->increments('id');
			$table->string('order_id');
			$table->string('app_id');
			$table->string('shop_id');
			$table->string('dropship_draft_order_id')->nullable();
			$table->string('customer_id')->nullable();
			$table->text('billing_address');
			$table->ipAddress('browser_ip')->nullable();
			$table->boolean('buyer_accepts_marketing')->default(false);
			$table->string('cancel_reason')->nullable();
			$table->datetimeTz('cancelled_at')->nullable();
			$table->string('cart_token');
			$table->text('client_details');
			$table->datetimeTz('closed_at')->nullable();
			$table->string('currency');
			$table->text('customer');
			$table->text('discount_codes');
			$table->string('email');
			$table->string('financial_status')->default('pending');
			$table->text('fulfillments')->nullable();
			$table->string('fulfillment_status')->nullable();
			$table->string('tags');
			$table->string('gateway');
			$table->string('landing_site');
			$table->text('line_items');
			$table->string('location_id');
			$table->string('name');
			$table->string('note')->nullable();
			$table->text('note_attributes');
			$table->string('number');
			$table->string('order_number');
			$table->text('payment_details');
			$table->text('payment_gateway_names');
			$table->string('phone');
			$table->datetimeTz('processed_at')->nullable();
			$table->string('processing_method');
			$table->string('referring_site');
			$table->text('refunds');
			$table->text('shipping_address');
			$table->text('shipping_lines');
			$table->string('source_name');
			$table->decimal('subtotal_price', 8,2);
			$table->text('tax_lines');
			$table->boolean('taxes_included')->default(false);
			$table->string('token');
			$table->decimal('total_discounts', 8,2)->default(0);
			$table->decimal('total_line_items_price', 8,2);
			$table->decimal('total_price', 8,2);
			$table->decimal('total_tax');
			$table->decimal('total_weight');
			$table->string('user_id');
			$table->string('order_status_url');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_orders');
	}
}
