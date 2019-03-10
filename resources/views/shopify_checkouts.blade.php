{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('checkout_id', 'Checkout_id:') !!}
			{!! Form::text('checkout_id') !!}
		</li>
		<li>
			{!! Form::label('customer_id', 'Customer_id:') !!}
			{!! Form::text('customer_id') !!}
		</li>
		<li>
			{!! Form::label('applied_discount', 'Applied_discount:') !!}
			{!! Form::textarea('applied_discount') !!}
		</li>
		<li>
			{!! Form::label('billing_address', 'Billing_address:') !!}
			{!! Form::textarea('billing_address') !!}
		</li>
		<li>
			{!! Form::label('buyer_accepts_marketing', 'Buyer_accepts_marketing:') !!}
			{!! Form::text('buyer_accepts_marketing') !!}
		</li>
		<li>
			{!! Form::label('currency', 'Currency:') !!}
			{!! Form::text('currency') !!}
		</li>
		<li>
			{!! Form::label('discount_code', 'Discount_code:') !!}
			{!! Form::text('discount_code') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('gift_cards', 'Gift_cards:') !!}
			{!! Form::textarea('gift_cards') !!}
		</li>
		<li>
			{!! Form::label('line_items', 'Line_items:') !!}
			{!! Form::textarea('line_items') !!}
		</li>
		<li>
			{!! Form::label('order', 'Order:') !!}
			{!! Form::textarea('order') !!}
		</li>
		<li>
			{!! Form::label('payment_due', 'Payment_due:') !!}
			{!! Form::text('payment_due') !!}
		</li>
		<li>
			{!! Form::label('payment_url', 'Payment_url:') !!}
			{!! Form::text('payment_url') !!}
		</li>
		<li>
			{!! Form::label('phone', 'Phone:') !!}
			{!! Form::text('phone') !!}
		</li>
		<li>
			{!! Form::label('requires_shipping', 'Requires_shipping:') !!}
			{!! Form::text('requires_shipping') !!}
		</li>
		<li>
			{!! Form::label('shipping_address', 'Shipping_address:') !!}
			{!! Form::textarea('shipping_address') !!}
		</li>
		<li>
			{!! Form::label('shipping_line', 'Shipping_line:') !!}
			{!! Form::textarea('shipping_line') !!}
		</li>
		<li>
			{!! Form::label('shipping_rate', 'Shipping_rate:') !!}
			{!! Form::textarea('shipping_rate') !!}
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
			{!! Form::textarea('tax_lines') !!}
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
			{!! Form::label('total_price', 'Total_price:') !!}
			{!! Form::text('total_price') !!}
		</li>
		<li>
			{!! Form::label('total_tax', 'Total_tax:') !!}
			{!! Form::text('total_tax') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('web_url', 'Web_url:') !!}
			{!! Form::text('web_url') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}