{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('price_rule_id', 'Price_rule_id:') !!}
			{!! Form::text('price_rule_id') !!}
		</li>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('target_type', 'Target_type:') !!}
			{!! Form::text('target_type') !!}
		</li>
		<li>
			{!! Form::label('target_selection', 'Target_selection:') !!}
			{!! Form::text('target_selection') !!}
		</li>
		<li>
			{!! Form::label('allocation_method', 'Allocation_method:') !!}
			{!! Form::text('allocation_method') !!}
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
			{!! Form::label('once_per_customer', 'Once_per_customer:') !!}
			{!! Form::text('once_per_customer') !!}
		</li>
		<li>
			{!! Form::label('usage_limit', 'Usage_limit:') !!}
			{!! Form::text('usage_limit') !!}
		</li>
		<li>
			{!! Form::label('customer_selection', 'Customer_selection:') !!}
			{!! Form::text('customer_selection') !!}
		</li>
		<li>
			{!! Form::label('prerequisite_saved_search_ids', 'Prerequisite_saved_search_ids:') !!}
			{!! Form::textarea('prerequisite_saved_search_ids') !!}
		</li>
		<li>
			{!! Form::label('prerequisite_customer_ids', 'Prerequisite_customer_ids:') !!}
			{!! Form::textarea('prerequisite_customer_ids') !!}
		</li>
		<li>
			{!! Form::label('prerequisite_subtotal_range', 'Prerequisite_subtotal_range:') !!}
			{!! Form::textarea('prerequisite_subtotal_range') !!}
		</li>
		<li>
			{!! Form::label('prerequisite_shipping_price_range', 'Prerequisite_shipping_price_range:') !!}
			{!! Form::textarea('prerequisite_shipping_price_range') !!}
		</li>
		<li>
			{!! Form::label('prerequisite_quantity_range', 'Prerequisite_quantity_range:') !!}
			{!! Form::textarea('prerequisite_quantity_range') !!}
		</li>
		<li>
			{!! Form::label('entitled_product_ids', 'Entitled_product_ids:') !!}
			{!! Form::textarea('entitled_product_ids') !!}
		</li>
		<li>
			{!! Form::label('entitled_variant_ids', 'Entitled_variant_ids:') !!}
			{!! Form::textarea('entitled_variant_ids') !!}
		</li>
		<li>
			{!! Form::label('entitled_collection_ids', 'Entitled_collection_ids:') !!}
			{!! Form::textarea('entitled_collection_ids') !!}
		</li>
		<li>
			{!! Form::label('entitled_country_ids', 'Entitled_country_ids:') !!}
			{!! Form::textarea('entitled_country_ids') !!}
		</li>
		<li>
			{!! Form::label('starts_at', 'Starts_at:') !!}
			{!! Form::text('starts_at') !!}
		</li>
		<li>
			{!! Form::label('ends_at', 'Ends_at:') !!}
			{!! Form::text('ends_at') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}