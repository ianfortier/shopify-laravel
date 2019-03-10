<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyAddressesTable extends Migration {

	public function up()
	{
		Schema::create('shopify_addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('address_id');
			$table->string('customer_id');
			$table->string('address1');
			$table->string('address2');
			$table->string('city');
			$table->string('country');
			$table->string('country_code');
			$table->string('country_name');
			$table->string('company')->nullable();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('name');
			$table->string('phone')->nullable();
			$table->string('province');
			$table->string('province_code');
			$table->string('zip');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_addresses');
	}
}
