<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyShopsInvitationsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_shops_invitations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shop_id');
			$table->string('invitation_code')->unique();
			$table->timestamps();
			$table->datetime('expired_at');
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_shops_invitations');
	}
}