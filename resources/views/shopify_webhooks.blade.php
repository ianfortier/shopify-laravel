{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('webhook_id', 'Webhook_id:') !!}
			{!! Form::text('webhook_id') !!}
		</li>
		<li>
			{!! Form::label('address', 'Address:') !!}
			{!! Form::text('address') !!}
		</li>
		<li>
			{!! Form::label('fields', 'Fields:') !!}
			{!! Form::textarea('fields') !!}
		</li>
		<li>
			{!! Form::label('format', 'Format:') !!}
			{!! Form::text('format') !!}
		</li>
		<li>
			{!! Form::label('metafield_namespaces', 'Metafield_namespaces:') !!}
			{!! Form::textarea('metafield_namespaces') !!}
		</li>
		<li>
			{!! Form::label('topic', 'Topic:') !!}
			{!! Form::text('topic') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}