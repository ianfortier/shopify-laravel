<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyTransactionsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_transactions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('order_id');
			$table->string('user_id');
			$table->string('transaction_id');
			$table->decimal('amount');
			$table->string('authorization');
			$table->string('currency');
			$table->string('device_id');
			$table->string('error_code');
			$table->string('gateway');
			$table->string('kind');
			$table->string('message');
			$table->text('payment_details');
			$table->string('parent_id');
			$table->text('receipt');
			$table->string('source_name');
			$table->string('status');
			$table->boolean('test');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_transactions');
	}
}
