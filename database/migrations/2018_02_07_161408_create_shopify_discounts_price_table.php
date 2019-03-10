<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyDiscountsPriceTable extends Migration {

	public function up()
	{
		Schema::create('shopify_discounts_price', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('group_name');
			$table->string('product_id');
			$table->integer('minimum_quantity')->default('1');
			$table->integer('maximum_quantity')->default('10');
			$table->string('value_type')->default('fixed_amount');
			$table->decimal('value');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_discounts_price');
	}
}
