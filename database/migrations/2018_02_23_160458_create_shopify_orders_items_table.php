<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyOrdersItemsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_orders_items', function(Blueprint $table) {
			$table->increments('id');
			$table->string('item_id');
			$table->string('order_id');
			$table->string('shop_id');
			$table->integer('fulfillable_quantity');
			$table->string('fulfillment_service');
			$table->string('fulfillment_status');
			$table->integer('grams');
			$table->double('price');
			$table->string('product_id')->nullable();
			$table->integer('quantity');
			$table->boolean('requires_shipping');
			$table->string('sku')->nullable();
			$table->string('title');
			$table->string('variant_id')->nullable();
			$table->string('variant_title')->nullable();
			$table->string('vendor')->nullable();
			$table->string('name');
			$table->boolean('gift_card');
			$table->text('properties');
			$table->boolean('taxable');
			$table->text('tax_lines');
			$table->double('total_discount');
			$table->string('variant_inventory_management')->nullable();
			$table->boolean('product_exists');

			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_orders_items');
	}
}
