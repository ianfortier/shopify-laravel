<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyWebhooksTable extends Migration {

	public function up()
	{
		Schema::create('shopify_webhooks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('webhook_id');
			$table->string('address');
			$table->text('fields');
			$table->string('format');
			$table->text('metafield_namespaces');
			$table->string('topic');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_webhooks');
	}
}
