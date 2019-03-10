{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('app_id', 'App_id:') !!}
			{!! Form::text('app_id') !!}
		</li>
		<li>
			{!! Form::label('billing_address', 'Billing_address:') !!}
			{!! Form::text('billing_address') !!}
		</li>
		<li>
			{!! Form::label('browser_ip', 'Browser_ip:') !!}
			{!! Form::text('browser_ip') !!}
		</li>
		<li>
			{!! Form::label('buyer_accepts_marketing', 'Buyer_accepts_marketing:') !!}
			{!! Form::text('buyer_accepts_marketing') !!}
		</li>
		<li>
			{!! Form::label('cancel_reason', 'Cancel_reason:') !!}
			{!! Form::text('cancel_reason') !!}
		</li>
		<li>
			{!! Form::label('cancelled_at', 'Cancelled_at:') !!}
			{!! Form::text('cancelled_at') !!}
		</li>
		<li>
			{!! Form::label('cart_token', 'Cart_token:') !!}
			{!! Form::text('cart_token') !!}
		</li>
		<li>
			{!! Form::label('client_details', 'Client_details:') !!}
			{!! Form::text('client_details') !!}
		</li>
		<li>
			{!! Form::label('closed_at', 'Closed_at:') !!}
			{!! Form::text('closed_at') !!}
		</li>
		<li>
			{!! Form::label('currency', 'Currency:') !!}
			{!! Form::text('currency') !!}
		</li>
		<li>
			{!! Form::label('customer', 'Customer:') !!}
			{!! Form::text('customer') !!}
		</li>
		<li>
			{!! Form::label('discount_codes', 'Discount_codes:') !!}
			{!! Form::text('discount_codes') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('financial_status', 'Financial_status:') !!}
			{!! Form::text('financial_status') !!}
		</li>
		<li>
			{!! Form::label('fulfillments', 'Fulfillments:') !!}
			{!! Form::text('fulfillments') !!}
		</li>
		<li>
			{!! Form::label('fulfillment_status', 'Fulfillment_status:') !!}
			{!! Form::text('fulfillment_status') !!}
		</li>
		<li>
			{!! Form::label('tags', 'Tags:') !!}
			{!! Form::text('tags') !!}
		</li>
		<li>
			{!! Form::label('gateway', 'Gateway:') !!}
			{!! Form::text('gateway') !!}
		</li>
		<li>
			{!! Form::label('order_id', 'Order_id:') !!}
			{!! Form::text('order_id') !!}
		</li>
		<li>
			{!! Form::label('landing_site', 'Landing_site:') !!}
			{!! Form::text('landing_site') !!}
		</li>
		<li>
			{!! Form::label('line_items', 'Line_items:') !!}
			{!! Form::text('line_items') !!}
		</li>
		<li>
			{!! Form::label('location_id', 'Location_id:') !!}
			{!! Form::text('location_id') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('note', 'Note:') !!}
			{!! Form::text('note') !!}
		</li>
		<li>
			{!! Form::label('note_attributes', 'Note_attributes:') !!}
			{!! Form::text('note_attributes') !!}
		</li>
		<li>
			{!! Form::label('number', 'Number:') !!}
			{!! Form::text('number') !!}
		</li>
		<li>
			{!! Form::label('order_number', 'Order_number:') !!}
			{!! Form::text('order_number') !!}
		</li>
		<li>
			{!! Form::label('payment_details', 'Payment_details:') !!}
			{!! Form::text('payment_details') !!}
		</li>
		<li>
			{!! Form::label('payment_gateway_names', 'Payment_gateway_names:') !!}
			{!! Form::text('payment_gateway_names') !!}
		</li>
		<li>
			{!! Form::label('phone', 'Phone:') !!}
			{!! Form::text('phone') !!}
		</li>
		<li>
			{!! Form::label('processed_at', 'Processed_at:') !!}
			{!! Form::text('processed_at') !!}
		</li>
		<li>
			{!! Form::label('processing_method', 'Processing_method:') !!}
			{!! Form::text('processing_method') !!}
		</li>
		<li>
			{!! Form::label('referring_site', 'Referring_site:') !!}
			{!! Form::text('referring_site') !!}
		</li>
		<li>
			{!! Form::label('refunds', 'Refunds:') !!}
			{!! Form::text('refunds') !!}
		</li>
		<li>
			{!! Form::label('shipping_address', 'Shipping_address:') !!}
			{!! Form::text('shipping_address') !!}
		</li>
		<li>
			{!! Form::label('shipping_lines', 'Shipping_lines:') !!}
			{!! Form::text('shipping_lines') !!}
		</li>
		<li>
			{!! Form::label('source_name', 'Source_name:') !!}
			{!! Form::text('source_name') !!}
		</li>
		<li>
			{!! Form::label('subtotal_price', 'Subtotal_price:') !!}
			{!! Form::text('subtotal_price') !!}
		</li>
		<li>
			{!! Form::label('tax_lines', 'Tax_lines:') !!}
			{!! Form::text('tax_lines') !!}
		</li>
		<li>
			{!! Form::label('taxes_included', 'Taxes_included:') !!}
			{!! Form::text('taxes_included') !!}
		</li>
		<li>
			{!! Form::label('token', 'Token:') !!}
			{!! Form::text('token') !!}
		</li>
		<li>
			{!! Form::label('total_discounts', 'Total_discounts:') !!}
			{!! Form::text('total_discounts') !!}
		</li>
		<li>
			{!! Form::label('total_line_items_price', 'Total_line_items_price:') !!}
			{!! Form::text('total_line_items_price') !!}
		</li>
		<li>
			{!! Form::label('total_price', 'Total_price:') !!}
			{!! Form::text('total_price') !!}
		</li>
		<li>
			{!! Form::label('total_tax', 'Total_tax:') !!}
			{!! Form::text('total_tax') !!}
		</li>
		<li>
			{!! Form::label('total_weight', 'Total_weight:') !!}
			{!! Form::text('total_weight') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('order_status_url', 'Order_status_url:') !!}
			{!! Form::text('order_status_url') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}