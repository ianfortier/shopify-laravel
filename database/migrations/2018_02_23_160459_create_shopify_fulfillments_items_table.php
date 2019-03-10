<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyFulfillmentsItemsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_fulfillments_items', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('item_id');
			$table->string('order_id');
			$table->string('fulfillment_id');
			$table->integer('fulfillable_quantity');
			$table->string('fulfillment_service');
			$table->string('fulfillment_status');
			$table->boolean('gift_card');
			$table->integer('grams');
			$table->string('name');
			$table->string('origin_location');
			$table->double('price');
			$table->boolean('product_exists');
			$table->string('product_id')->nullable();
			$table->text('properties');
			$table->integer('quantity');
			$table->boolean('requires_shipping');
			$table->string('sku')->nullable();
			$table->text('tax_lines');
			$table->boolean('taxable');
			$table->string('title');
			$table->double('total_discount');
			$table->string('variant_id')->nullable();
			$table->string('variant_inventory_management')->nullable();
			$table->string('variant_title')->nullable();
			$table->string('vendor')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_fulfillments_items');
	}
}
