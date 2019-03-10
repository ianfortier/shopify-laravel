{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('order_id', 'Order_id:') !!}
			{!! Form::text('order_id') !!}
		</li>
		<li>
			{!! Form::label('line_item_id', 'Line_item_id:') !!}
			{!! Form::text('line_item_id') !!}
		</li>
		<li>
			{!! Form::label('fulfillable_quantity', 'Fulfillable_quantity:') !!}
			{!! Form::text('fulfillable_quantity') !!}
		</li>
		<li>
			{!! Form::label('fulfillment_service', 'Fulfillment_service:') !!}
			{!! Form::text('fulfillment_service') !!}
		</li>
		<li>
			{!! Form::label('fulfillment_status', 'Fulfillment_status:') !!}
			{!! Form::text('fulfillment_status') !!}
		</li>
		<li>
			{!! Form::label('grams', 'Grams:') !!}
			{!! Form::text('grams') !!}
		</li>
		<li>
			{!! Form::label('price', 'Price:') !!}
			{!! Form::text('price') !!}
		</li>
		<li>
			{!! Form::label('product_id', 'Product_id:') !!}
			{!! Form::text('product_id') !!}
		</li>
		<li>
			{!! Form::label('quantity', 'Quantity:') !!}
			{!! Form::text('quantity') !!}
		</li>
		<li>
			{!! Form::label('requires_shipping', 'Requires_shipping:') !!}
			{!! Form::text('requires_shipping') !!}
		</li>
		<li>
			{!! Form::label('sku', 'Sku:') !!}
			{!! Form::text('sku') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('variant_id', 'Variant_id:') !!}
			{!! Form::text('variant_id') !!}
		</li>
		<li>
			{!! Form::label('variant_title', 'Variant_title:') !!}
			{!! Form::text('variant_title') !!}
		</li>
		<li>
			{!! Form::label('vendor', 'Vendor:') !!}
			{!! Form::text('vendor') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('gift_card', 'Gift_card:') !!}
			{!! Form::text('gift_card') !!}
		</li>
		<li>
			{!! Form::label('properties', 'Properties:') !!}
			{!! Form::textarea('properties') !!}
		</li>
		<li>
			{!! Form::label('taxable', 'Taxable:') !!}
			{!! Form::text('taxable') !!}
		</li>
		<li>
			{!! Form::label('tax_lines', 'Tax_lines:') !!}
			{!! Form::textarea('tax_lines') !!}
		</li>
		<li>
			{!! Form::label('total_discount', 'Total_discount:') !!}
			{!! Form::text('total_discount') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}