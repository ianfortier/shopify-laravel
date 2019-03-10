<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopifyShopsTable extends Migration {

	public function up()
	{
		Schema::create('shopify_shops', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('shop_id');
			$table->string('account_id');
			$table->string('name');
			$table->string('myshopify_domain');
			$table->text('token')->nullable();
			$table->string('address1');
			$table->string('address2')->nullable();
			$table->string('city');
			$table->string('country');
			$table->string('country_code');
			$table->string('country_name');
			$table->string('customer_email')->nullable();
			$table->string('currency');
			$table->string('domain');
			$table->string('email');
			$table->string('google_apps_domain')->nullable();
			$table->boolean('google_apps_login_enabled')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->string('money_format');
			$table->string('money_with_currency_format');
			$table->string('weight_unit');
			$table->string('plan_name');
			$table->boolean('has_discounts');
			$table->boolean('has_gift_cards');
			$table->string('plan_display_name');
			$table->boolean('password_enabled');
			$table->string('phone')->nullable();
			$table->string('primary_locale');
			$table->string('province');
			$table->string('province_code');
			$table->string('shop_owner');
			$table->string('source')->nullable();
			$table->boolean('force_ssl');
			$table->boolean('tax_shipping')->nullable();
			$table->boolean('taxes_included')->nullable();
			$table->boolean('county_taxes')->nullable();
			$table->string('timezone');
			$table->string('iana_timezone');
			$table->string('zip')->nullable();
			$table->boolean('has_storefront');
			$table->boolean('setup_required');
			$table->boolean('multi_location_enabled');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('shopify_shops');
	}
}
