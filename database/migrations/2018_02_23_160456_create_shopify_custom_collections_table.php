<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyCustomCollectionsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_custom_collections', function(Blueprint $table) {
			$table->increments('id');
			$table->string('collection_id');
			$table->string('shop_id');
			$table->string('title');
			$table->text('body_html')->nullable();
			$table->string('handle');
			$table->string('image');
			$table->text('metafield');
			$table->boolean('published');
			$table->datetimeTz('published_at');
			$table->string('published_scope');
			$table->string('sort_order');
			$table->string('template_suffix')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_custom_collections');
	}
}
