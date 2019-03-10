{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('address1', 'Address1:') !!}
			{!! Form::text('address1') !!}
		</li>
		<li>
			{!! Form::label('address2', 'Address2:') !!}
			{!! Form::text('address2') !!}
		</li>
		<li>
			{!! Form::label('city', 'City:') !!}
			{!! Form::text('city') !!}
		</li>
		<li>
			{!! Form::label('country', 'Country:') !!}
			{!! Form::text('country') !!}
		</li>
		<li>
			{!! Form::label('country_code', 'Country_code:') !!}
			{!! Form::text('country_code') !!}
		</li>
		<li>
			{!! Form::label('country_name', 'Country_name:') !!}
			{!! Form::text('country_name') !!}
		</li>
		<li>
			{!! Form::label('customer_email', 'Customer_email:') !!}
			{!! Form::text('customer_email') !!}
		</li>
		<li>
			{!! Form::label('currency', 'Currency:') !!}
			{!! Form::text('currency') !!}
		</li>
		<li>
			{!! Form::label('domain', 'Domain:') !!}
			{!! Form::text('domain') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('google_apps_domain', 'Google_apps_domain:') !!}
			{!! Form::text('google_apps_domain') !!}
		</li>
		<li>
			{!! Form::label('google_apps_login_enabled', 'Google_apps_login_enabled:') !!}
			{!! Form::text('google_apps_login_enabled') !!}
		</li>
		<li>
			{!! Form::label('latitude', 'Latitude:') !!}
			{!! Form::text('latitude') !!}
		</li>
		<li>
			{!! Form::label('longitude', 'Longitude:') !!}
			{!! Form::text('longitude') !!}
		</li>
		<li>
			{!! Form::label('money_format', 'Money_format:') !!}
			{!! Form::text('money_format') !!}
		</li>
		<li>
			{!! Form::label('money_with_currency_format', 'Money_with_currency_format:') !!}
			{!! Form::text('money_with_currency_format') !!}
		</li>
		<li>
			{!! Form::label('weight_unit', 'Weight_unit:') !!}
			{!! Form::text('weight_unit') !!}
		</li>
		<li>
			{!! Form::label('myshopify_domain', 'Myshopify_domain:') !!}
			{!! Form::text('myshopify_domain') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('plan_name', 'Plan_name:') !!}
			{!! Form::text('plan_name') !!}
		</li>
		<li>
			{!! Form::label('has_discounts', 'Has_discounts:') !!}
			{!! Form::text('has_discounts') !!}
		</li>
		<li>
			{!! Form::label('has_gift_cards', 'Has_gift_cards:') !!}
			{!! Form::text('has_gift_cards') !!}
		</li>
		<li>
			{!! Form::label('plan_display_name', 'Plan_display_name:') !!}
			{!! Form::text('plan_display_name') !!}
		</li>
		<li>
			{!! Form::label('password_enabled', 'Password_enabled:') !!}
			{!! Form::text('password_enabled') !!}
		</li>
		<li>
			{!! Form::label('phone', 'Phone:') !!}
			{!! Form::text('phone') !!}
		</li>
		<li>
			{!! Form::label('primary_locale', 'Primary_locale:') !!}
			{!! Form::text('primary_locale') !!}
		</li>
		<li>
			{!! Form::label('province', 'Province:') !!}
			{!! Form::text('province') !!}
		</li>
		<li>
			{!! Form::label('province_code', 'Province_code:') !!}
			{!! Form::text('province_code') !!}
		</li>
		<li>
			{!! Form::label('shop_owner', 'Shop_owner:') !!}
			{!! Form::text('shop_owner') !!}
		</li>
		<li>
			{!! Form::label('source', 'Source:') !!}
			{!! Form::text('source') !!}
		</li>
		<li>
			{!! Form::label('force_ssl', 'Force_ssl:') !!}
			{!! Form::text('force_ssl') !!}
		</li>
		<li>
			{!! Form::label('tax_shipping', 'Tax_shipping:') !!}
			{!! Form::text('tax_shipping') !!}
		</li>
		<li>
			{!! Form::label('taxes_included', 'Taxes_included:') !!}
			{!! Form::text('taxes_included') !!}
		</li>
		<li>
			{!! Form::label('county_taxes', 'County_taxes:') !!}
			{!! Form::text('county_taxes') !!}
		</li>
		<li>
			{!! Form::label('timezone', 'Timezone:') !!}
			{!! Form::text('timezone') !!}
		</li>
		<li>
			{!! Form::label('iana_timezone', 'Iana_timezone:') !!}
			{!! Form::text('iana_timezone') !!}
		</li>
		<li>
			{!! Form::label('zip', 'Zip:') !!}
			{!! Form::text('zip') !!}
		</li>
		<li>
			{!! Form::label('has_storefront', 'Has_storefront:') !!}
			{!! Form::text('has_storefront') !!}
		</li>
		<li>
			{!! Form::label('setup_required', 'Setup_required:') !!}
			{!! Form::text('setup_required') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}