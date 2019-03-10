{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('inventory_item_id', 'Inventory_item_id:') !!}
			{!! Form::text('inventory_item_id') !!}
		</li>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('location_id', 'Location_id:') !!}
			{!! Form::text('location_id') !!}
		</li>
		<li>
			{!! Form::label('available', 'Available:') !!}
			{!! Form::text('available') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}