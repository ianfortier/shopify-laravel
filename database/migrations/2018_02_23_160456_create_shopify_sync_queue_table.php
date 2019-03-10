<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifySyncQueueTable extends Migration {

	public function up()
	{
		Schema::create('shopify_sync_queue', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->text('elements');
			$table->text('data');
			$table->datetimeTz('synced_at')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_sync_queue');
	}
}
