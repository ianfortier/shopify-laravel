{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('province_id', 'Province_id:') !!}
			{!! Form::text('province_id') !!}
		</li>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('country_id', 'Country_id:') !!}
			{!! Form::text('country_id') !!}
		</li>
		<li>
			{!! Form::label('code', 'Code:') !!}
			{!! Form::text('code') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('shipping_zone_id', 'Shipping_zone_id:') !!}
			{!! Form::text('shipping_zone_id') !!}
		</li>
		<li>
			{!! Form::label('tax', 'Tax:') !!}
			{!! Form::text('tax') !!}
		</li>
		<li>
			{!! Form::label('tax_name', 'Tax_name:') !!}
			{!! Form::text('tax_name') !!}
		</li>
		<li>
			{!! Form::label('tax_type', 'Tax_type:') !!}
			{!! Form::text('tax_type') !!}
		</li>
		<li>
			{!! Form::label('tax_percentage', 'Tax_percentage:') !!}
			{!! Form::text('tax_percentage') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}