<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyLocationsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_locations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('location_id');
			$table->boolean('legacy');
			$table->string('name');
			$table->string('address1');
			$table->string('address2');
			$table->string('zip');
			$table->string('city');
			$table->string('province');
			$table->string('country');
			$table->string('phone');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_locations');
	}
}
