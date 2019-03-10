{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('body_html', 'Body_html:') !!}
			{!! Form::textarea('body_html') !!}
		</li>
		<li>
			{!! Form::label('handle', 'Handle:') !!}
			{!! Form::text('handle') !!}
		</li>
		<li>
			{!! Form::label('images', 'Images:') !!}
			{!! Form::textarea('images') !!}
		</li>
		<li>
			{!! Form::label('options', 'Options:') !!}
			{!! Form::textarea('options') !!}
		</li>
		<li>
			{!! Form::label('product_type', 'Product_type:') !!}
			{!! Form::text('product_type') !!}
		</li>
		<li>
			{!! Form::label('published_at', 'Published_at:') !!}
			{!! Form::text('published_at') !!}
		</li>
		<li>
			{!! Form::label('published_scope', 'Published_scope:') !!}
			{!! Form::text('published_scope') !!}
		</li>
		<li>
			{!! Form::label('tags', 'Tags:') !!}
			{!! Form::textarea('tags') !!}
		</li>
		<li>
			{!! Form::label('template_suffix', 'Template_suffix:') !!}
			{!! Form::text('template_suffix') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('metafields_global_title_tag', 'Metafields_global_title_tag:') !!}
			{!! Form::textarea('metafields_global_title_tag') !!}
		</li>
		<li>
			{!! Form::label('metafields_global_description_tag', 'Metafields_global_description_tag:') !!}
			{!! Form::textarea('metafields_global_description_tag') !!}
		</li>
		<li>
			{!! Form::label('variants', 'Variants:') !!}
			{!! Form::textarea('variants') !!}
		</li>
		<li>
			{!! Form::label('vendor', 'Vendor:') !!}
			{!! Form::text('vendor') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}