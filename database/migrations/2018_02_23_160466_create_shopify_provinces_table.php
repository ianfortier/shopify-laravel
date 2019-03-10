<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyProvincesTable extends Migration {

	public function up()
	{
		Schema::create('shopify_provinces', function(Blueprint $table) {
			$table->increments('id');
			$table->string('province_id');
			$table->string('shop_id');
			$table->string('country_id');
			$table->string('code');
			$table->string('name');
			$table->string('shipping_zone_id');
			$table->decimal('tax');
			$table->string('tax_name');
			$table->string('tax_type');
			$table->decimal('tax_percentage');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_provinces');
	}
}
