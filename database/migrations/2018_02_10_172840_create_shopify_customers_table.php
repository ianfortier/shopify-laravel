<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyCustomersTable extends Migration {

	public function up()
	{
		Schema::create('shopify_customers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('customer_id');
			$table->string('shop_id');
			$table->text('addresses')->nullable();
			$table->boolean('accepts_marketing');
			$table->text('default_address')->nullable();
			$table->string('email');
			$table->string('phone')->nullable();
			$table->string('first_name')->nullable();
			$table->string('multipass_identifier')->nullable();
			$table->string('last_name')->nullable();
			$table->string('last_order_id')->nullable();
			$table->string('last_order_name')->nullable();
			$table->text('note')->nullable();
			$table->integer('orders_count');
			$table->string('state')->nullable();
			$table->text('tags');
			$table->boolean('tax_exempt');
			$table->decimal('total_spent')->default('0.00');
			$table->boolean('verified_email');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_customers');
	}
}
