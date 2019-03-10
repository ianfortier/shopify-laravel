<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyProductListingsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_product_listings', function(Blueprint $table) {
			$table->increments('id');
			$table->string('product_id');
			$table->string('shop_id');
			$table->text('body_html');
			$table->string('handle');
			$table->text('images');
			$table->text('options');
			$table->string('product_type');
			$table->text('tags');
			$table->string('title');
			$table->text('variants');
			$table->string('vendor');
			$table->datetimeTz('published_at')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_product_listings');
	}
}
