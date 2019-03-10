<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyCountriesTable extends Migration {

	public function up()
	{
		Schema::create('shopify_countries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('country_id');
			$table->text('provinces');
			$table->string('code');
			$table->string('name');
			$table->decimal('tax');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_countries');
	}
}
