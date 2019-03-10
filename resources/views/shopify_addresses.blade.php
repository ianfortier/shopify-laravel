{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('address_id', 'Address_id:') !!}
			{!! Form::text('address_id') !!}
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
			{!! Form::label('company', 'Company:') !!}
			{!! Form::text('company') !!}
		</li>
		<li>
			{!! Form::label('first_name', 'First_name:') !!}
			{!! Form::text('first_name') !!}
		</li>
		<li>
			{!! Form::label('last_name', 'Last_name:') !!}
			{!! Form::text('last_name') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('phone', 'Phone:') !!}
			{!! Form::text('phone') !!}
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
			{!! Form::label('zip', 'Zip:') !!}
			{!! Form::text('zip') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}