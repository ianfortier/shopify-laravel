{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('inventory_item_id', 'Inventory_item_id:') !!}
			{!! Form::text('inventory_item_id') !!}
		</li>
		<li>
			{!! Form::label('sku', 'Sku:') !!}
			{!! Form::text('sku') !!}
		</li>
		<li>
			{!! Form::label('tracked', 'Tracked:') !!}
			{!! Form::text('tracked') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}