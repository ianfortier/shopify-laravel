<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyCheckoutsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_checkouts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('checkout_id');
			$table->string('customer_id');
			$table->text('applied_discount');
			$table->text('billing_address');
			$table->boolean('buyer_accepts_marketing');
			$table->string('currency');
			$table->string('discount_code');
			$table->string('email');
			$table->text('gift_cards');
			$table->text('line_items');
			$table->text('order');
			$table->decimal('payment_due');
			$table->string('payment_url');
			$table->string('phone');
			$table->boolean('requires_shipping');
			$table->text('shipping_address');
			$table->text('shipping_line');
			$table->text('shipping_rate');
			$table->string('source_name');
			$table->decimal('subtotal_price');
			$table->text('tax_lines');
			$table->boolean('taxes_included');
			$table->string('token');
			$table->decimal('total_price');
			$table->decimal('total_tax');
			$table->string('user_id')->nullable();
			$table->string('web_url');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_checkouts');
	}
}
