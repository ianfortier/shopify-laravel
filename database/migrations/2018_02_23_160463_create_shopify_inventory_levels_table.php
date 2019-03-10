<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyInventoryLevelsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_inventory_levels', function(Blueprint $table) {
			$table->increments('id');
			$table->string('inventory_item_id');
			$table->string('shop_id');
			$table->string('location_id');
			$table->integer('available');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_inventory_levels');
	}
}
