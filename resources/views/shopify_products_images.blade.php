{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('image_id', 'Image_id:') !!}
			{!! Form::text('image_id') !!}
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
			{!! Form::label('variant_ids', 'Variant_ids:') !!}
			{!! Form::textarea('variant_ids') !!}
		</li>
		<li>
			{!! Form::label('src', 'Src:') !!}
			{!! Form::text('src') !!}
		</li>
		<li>
			{!! Form::label('width', 'Width:') !!}
			{!! Form::text('width') !!}
		</li>
		<li>
			{!! Form::label('height', 'Height:') !!}
			{!! Form::text('height') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}