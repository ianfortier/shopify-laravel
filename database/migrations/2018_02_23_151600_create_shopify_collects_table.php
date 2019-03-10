<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyCollectsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_collects', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('collection_id');
			$table->boolean('featured');
			$table->string('collect_id');
			$table->integer('position');
			$table->string('product_id');
			$table->string('sort_value');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_collects');
	}
}
