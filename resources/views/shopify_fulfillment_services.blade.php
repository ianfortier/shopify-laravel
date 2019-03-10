{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('callback_url', 'Callback_url:') !!}
			{!! Form::text('callback_url') !!}
		</li>
		<li>
			{!! Form::label('format', 'Format:') !!}
			{!! Form::text('format') !!}
		</li>
		<li>
			{!! Form::label('handle', 'Handle:') !!}
			{!! Form::text('handle') !!}
		</li>
		<li>
			{!! Form::label('inventory_management', 'Inventory_management:') !!}
			{!! Form::text('inventory_management') !!}
		</li>
		<li>
			{!! Form::label('location_id', 'Location_id:') !!}
			{!! Form::text('location_id') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('provider_id', 'Provider_id:') !!}
			{!! Form::text('provider_id') !!}
		</li>
		<li>
			{!! Form::label('requires_shipping_method', 'Requires_shipping_method:') !!}
			{!! Form::text('requires_shipping_method') !!}
		</li>
		<li>
			{!! Form::label('tracking_support', 'Tracking_support:') !!}
			{!! Form::text('tracking_support') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}