{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('collection_id', 'Collection_id:') !!}
			{!! Form::text('collection_id') !!}
		</li>
		<li>
			{!! Form::label('body_html', 'Body_html:') !!}
			{!! Form::textarea('body_html') !!}
		</li>
		<li>
			{!! Form::label('default_product_image', 'Default_product_image:') !!}
			{!! Form::textarea('default_product_image') !!}
		</li>
		<li>
			{!! Form::label('image', 'Image:') !!}
			{!! Form::textarea('image') !!}
		</li>
		<li>
			{!! Form::label('handle', 'Handle:') !!}
			{!! Form::text('handle') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('sort_order', 'Sort_order:') !!}
			{!! Form::text('sort_order') !!}
		</li>
		<li>
			{!! Form::label('published_at', 'Published_at:') !!}
			{!! Form::text('published_at') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}