{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('group_name', 'Group_name:') !!}
			{!! Form::text('group_name') !!}
		</li>
		<li>
			{!! Form::label('variant_id', 'Variant_id:') !!}
			{!! Form::text('variant_id') !!}
		</li>
		<li>
			{!! Form::label('minimum_quantity', 'Minimum_quantity:') !!}
			{!! Form::text('minimum_quantity') !!}
		</li>
		<li>
			{!! Form::label('maximum_quantity', 'Maximum_quantity:') !!}
			{!! Form::text('maximum_quantity') !!}
		</li>
		<li>
			{!! Form::label('value_type', 'Value_type:') !!}
			{!! Form::text('value_type') !!}
		</li>
		<li>
			{!! Form::label('value', 'Value:') !!}
			{!! Form::text('value') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}