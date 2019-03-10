<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyPriceRulesTable extends Migration {

	public function up()
	{
		Schema::create('shopify_price_rules', function(Blueprint $table) {
			$table->increments('id');
			$table->string('price_rule_id');
			$table->string('shop_id');
			$table->string('title');
			$table->string('target_type');
			$table->string('target_selection');
			$table->string('allocation_method');
			$table->string('value_type');
			$table->string('value');
			$table->boolean('once_per_customer');
			$table->integer('usage_limit');
			$table->string('customer_selection');
			$table->text('prerequisite_saved_search_ids');
			$table->text('prerequisite_customer_ids');
			$table->text('prerequisite_subtotal_range');
			$table->text('prerequisite_shipping_price_range');
			$table->text('prerequisite_quantity_range');
			$table->text('entitled_product_ids');
			$table->text('entitled_variant_ids');
			$table->text('entitled_collection_ids');
			$table->text('entitled_country_ids');
			$table->datetimeTz('starts_at');
			$table->datetimeTz('ends_at');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_price_rules');
	}
}
