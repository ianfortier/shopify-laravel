<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyFulfillmentTable extends Migration {

	public function up()
	{
		Schema::create('shopify_fulfillment', function(Blueprint $table) {
			$table->increments('id');
			$table->string('fulfillment_id');
			$table->string('shop_id');
			$table->text('line_items');
			$table->string('location_id');
			$table->boolean('notify_customer');
			$table->string('order_id');
			$table->string('status');
			$table->text('receipt');
			$table->string('service');
			$table->string('tracking_company')->nullable();
			$table->text('tracking_numbers');
			$table->text('tracking_urls');
			$table->string('shipment_status')->nullable();
			$table->string('variant_inventory_management');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_fulfillment');
	}
}
