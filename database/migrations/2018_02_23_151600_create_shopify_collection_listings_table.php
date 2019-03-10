<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyCollectionListingsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_collection_listings', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('collection_id');
			$table->text('body_html');
			$table->text('default_product_image')->nullable();
			$table->text('image')->nullable();
			$table->string('handle');
			$table->string('title');
			$table->string('sort_order');
			$table->datetimeTz('published_at');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_collection_listings');
	}
}
