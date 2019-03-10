<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyFulfillmentServicesTable extends Migration {

	public function up()
	{
		Schema::create('shopify_fulfillment_services', function(Blueprint $table) {
			$table->increments('id');
			$table->string('fulfillment_service_id');
			$table->string('shop_id');
			$table->string('handle');
			$table->boolean('inventory_management');
			$table->string('location_id');
			$table->string('name');
			$table->string('provider_id')->nullable();
			$table->boolean('requires_shipping_method');
			$table->boolean('tracking_support');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_fulfillment_services');
	}
}
