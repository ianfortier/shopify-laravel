{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('barcode', 'Barcode:') !!}
			{!! Form::text('barcode') !!}
		</li>
		<li>
			{!! Form::label('compare_at_price', 'Compare_at_price:') !!}
			{!! Form::text('compare_at_price') !!}
		</li>
		<li>
			{!! Form::label('fulfillment_service', 'Fulfillment_service:') !!}
			{!! Form::text('fulfillment_service') !!}
		</li>
		<li>
			{!! Form::label('grams', 'Grams:') !!}
			{!! Form::text('grams') !!}
		</li>
		<li>
			{!! Form::label('image_id', 'Image_id:') !!}
			{!! Form::text('image_id') !!}
		</li>
		<li>
			{!! Form::label('inventory_management', 'Inventory_management:') !!}
			{!! Form::text('inventory_management') !!}
		</li>
		<li>
			{!! Form::label('inventory_policy', 'Inventory_policy:') !!}
			{!! Form::text('inventory_policy') !!}
		</li>
		<li>
			{!! Form::label('inventory_quantity', 'Inventory_quantity:') !!}
			{!! Form::text('inventory_quantity') !!}
		</li>
		<li>
			{!! Form::label('old_inventory_quantity', 'Old_inventory_quantity:') !!}
			{!! Form::text('old_inventory_quantity') !!}
		</li>
		<li>
			{!! Form::label('inventory_quantity_adjustment', 'Inventory_quantity_adjustment:') !!}
			{!! Form::text('inventory_quantity_adjustment') !!}
		</li>
		<li>
			{!! Form::label('metafield', 'Metafield:') !!}
			{!! Form::textarea('metafield') !!}
		</li>
		<li>
			{!! Form::label('option', 'Option:') !!}
			{!! Form::textarea('option') !!}
		</li>
		<li>
			{!! Form::label('position', 'Position:') !!}
			{!! Form::text('position') !!}
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
			{!! Form::label('requires_shipping', 'Requires_shipping:') !!}
			{!! Form::text('requires_shipping') !!}
		</li>
		<li>
			{!! Form::label('sku', 'Sku:') !!}
			{!! Form::text('sku') !!}
		</li>
		<li>
			{!! Form::label('taxable', 'Taxable:') !!}
			{!! Form::text('taxable') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('weight', 'Weight:') !!}
			{!! Form::text('weight') !!}
		</li>
		<li>
			{!! Form::label('weight_unit', 'Weight_unit:') !!}
			{!! Form::text('weight_unit') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}