<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyDraftOrdersTable extends Migration {

	public function up()
	{
		Schema::create('shopify_draft_orders', function(Blueprint $table) {
			$table->increments('id');
			$table->string('draft_order_id')->unique();
			$table->string('shop_id');
			$table->string('order_id')->nullable();
			$table->string('customer_id')->nullable();
			$table->string('name');
			$table->string('customer');
			$table->text('shipping_address');
			$table->text('billing_address');
			$table->text('note');
			$table->text('note_attributes');
			$table->string('email');
			$table->string('currency');
			$table->datetimeTz('invoice_sent_at')->nullable();
			$table->string('invoice_url');
			$table->text('line_items');
			$table->text('shipping_line');
			$table->text('tags');
			$table->boolean('tax_exempt');
			$table->text('tax_lines');
			$table->text('applied_discount');
			$table->boolean('taxes_included');
			$table->decimal('total_tax');
			$table->decimal('subtotal_price');
			$table->decimal('total_price');
			$table->datetimeTz('completed_at')->nullable();
			$table->string('status');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_draft_orders');
	}
}
