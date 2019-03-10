{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
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
			{!! Form::label('tax', 'Tax:') !!}
			{!! Form::text('tax') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}