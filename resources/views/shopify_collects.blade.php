{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('collection_id', 'Collection_id:') !!}
			{!! Form::text('collection_id') !!}
		</li>
		<li>
			{!! Form::label('featured', 'Featured:') !!}
			{!! Form::text('featured') !!}
		</li>
		<li>
			{!! Form::label('collect_id', 'Collect_id:') !!}
			{!! Form::text('collect_id') !!}
		</li>
		<li>
			{!! Form::label('position', 'Position:') !!}
			{!! Form::text('position') !!}
		</li>
		<li>
			{!! Form::label('product_id', 'Product_id:') !!}
			{!! Form::text('product_id') !!}
		</li>
		<li>
			{!! Form::label('sort_value', 'Sort_value:') !!}
			{!! Form::text('sort_value') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}