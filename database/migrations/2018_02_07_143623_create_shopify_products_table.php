<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyProductsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('product_id');
			$table->string('shop_id');
			$table->string('product_model_id')->nullable();
			$table->text('body_html')->nullable();
			$table->string('handle');
			$table->text('images');
			$table->text('options');
			$table->string('product_type');
			$table->datetimeTz('published_at')->nullable();
			$table->string('published_scope');
			$table->text('tags');
			$table->string('template_suffix')->nullable();
			$table->string('title');
			$table->text('metafields_global_title_tag');
			$table->text('metafields_global_description_tag');
			$table->text('variants');
			$table->string('vendor');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_products');
	}
}
