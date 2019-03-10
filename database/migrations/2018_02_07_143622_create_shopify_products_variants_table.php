<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyProductsVariantsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_products_variants', function(Blueprint $table) {
			$table->increments('id');
			$table->string('variant_id')->unique();
			$table->string('shop_id');
			$table->string('barcode')->nullable();
			$table->decimal('compare_at_price')->nullable();
			$table->string('fulfillment_service');
			$table->decimal('grams');
			$table->string('image_id')->nullable();
			$table->string('inventory_item_id')->nullable();
			$table->string('inventory_management')->nullable();
			$table->string('inventory_policy');
			$table->integer('inventory_quantity');
			$table->integer('old_inventory_quantity');
			$table->integer('inventory_quantity_adjustment');
			$table->text('metafield');
			$table->text('option');
			$table->string('option1')->nullable();
			$table->string('option2')->nullable();
			$table->string('option3')->nullable();
			$table->integer('position');
			$table->decimal('price');
			$table->string('product_id');
			$table->boolean('requires_shipping');
			$table->string('sku');
			$table->boolean('taxable');
			$table->string('title');
			$table->decimal('weight');
			$table->string('weight_unit');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_products_variants');
	}
}
