<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyProductsImagesTable extends Migration {

	public function up()
	{
		Schema::create('shopify_products_images', function(Blueprint $table) {
			$table->increments('id');
			$table->string('image_id');
			$table->string('shop_id');
			$table->integer('position');
			$table->string('product_id');
			$table->text('variant_ids')->nullable();
			$table->string('alt')->nullable();
			$table->string('src');
			$table->integer('width');
			$table->integer('height');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_products_images');
	}
}
