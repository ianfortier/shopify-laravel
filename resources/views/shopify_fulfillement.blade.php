{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('fulfillement_id', 'Fulfillement_id:') !!}
			{!! Form::text('fulfillement_id') !!}
		</li>
		<li>
			{!! Form::label('line_items', 'Line_items:') !!}
			{!! Form::textarea('line_items') !!}
		</li>
		<li>
			{!! Form::label('notify_customer', 'Notify_customer:') !!}
			{!! Form::text('notify_customer') !!}
		</li>
		<li>
			{!! Form::label('order_id', 'Order_id:') !!}
			{!! Form::text('order_id') !!}
		</li>
		<li>
			{!! Form::label('receipt', 'Receipt:') !!}
			{!! Form::textarea('receipt') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('tracking_company', 'Tracking_company:') !!}
			{!! Form::text('tracking_company') !!}
		</li>
		<li>
			{!! Form::label('tracking_numbers', 'Tracking_numbers:') !!}
			{!! Form::textarea('tracking_numbers') !!}
		</li>
		<li>
			{!! Form::label('tracking_urls', 'Tracking_urls:') !!}
			{!! Form::textarea('tracking_urls') !!}
		</li>
		<li>
			{!! Form::label('variant_inventory_management', 'Variant_inventory_management:') !!}
			{!! Form::text('variant_inventory_management') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}