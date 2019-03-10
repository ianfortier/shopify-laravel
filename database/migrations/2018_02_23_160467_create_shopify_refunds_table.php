<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyRefundsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_refunds', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('order_id');
			$table->string('refund_id');
			$table->string('note');
			$table->text('order_adjustments');
			$table->datetimeTz('processed_at');
			$table->text('refund_line_items');
			$table->text('transactions');
			$table->string('user_id');
			$table->string('currency');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_refunds');
	}
}
