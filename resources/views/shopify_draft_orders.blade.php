{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('order_id', 'Order_id:') !!}
			{!! Form::text('order_id') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('customer', 'Customer:') !!}
			{!! Form::text('customer') !!}
		</li>
		<li>
			{!! Form::label('shipping_address', 'Shipping_address:') !!}
			{!! Form::textarea('shipping_address') !!}
		</li>
		<li>
			{!! Form::label('billing_address', 'Billing_address:') !!}
			{!! Form::textarea('billing_address') !!}
		</li>
		<li>
			{!! Form::label('note', 'Note:') !!}
			{!! Form::textarea('note') !!}
		</li>
		<li>
			{!! Form::label('note_attributes', 'Note_attributes:') !!}
			{!! Form::textarea('note_attributes') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('currency', 'Currency:') !!}
			{!! Form::text('currency') !!}
		</li>
		<li>
			{!! Form::label('invoice_sent_at', 'Invoice_sent_at:') !!}
			{!! Form::text('invoice_sent_at') !!}
		</li>
		<li>
			{!! Form::label('invoice_url', 'Invoice_url:') !!}
			{!! Form::text('invoice_url') !!}
		</li>
		<li>
			{!! Form::label('line_items', 'Line_items:') !!}
			{!! Form::textarea('line_items') !!}
		</li>
		<li>
			{!! Form::label('shipping_line', 'Shipping_line:') !!}
			{!! Form::textarea('shipping_line') !!}
		</li>
		<li>
			{!! Form::label('tags', 'Tags:') !!}
			{!! Form::textarea('tags') !!}
		</li>
		<li>
			{!! Form::label('tax_exempt', 'Tax_exempt:') !!}
			{!! Form::text('tax_exempt') !!}
		</li>
		<li>
			{!! Form::label('tax_lines', 'Tax_lines:') !!}
			{!! Form::textarea('tax_lines') !!}
		</li>
		<li>
			{!! Form::label('applied_discount', 'Applied_discount:') !!}
			{!! Form::textarea('applied_discount') !!}
		</li>
		<li>
			{!! Form::label('taxes_included', 'Taxes_included:') !!}
			{!! Form::text('taxes_included') !!}
		</li>
		<li>
			{!! Form::label('total_tax', 'Total_tax:') !!}
			{!! Form::text('total_tax') !!}
		</li>
		<li>
			{!! Form::label('subtotal_price', 'Subtotal_price:') !!}
			{!! Form::text('subtotal_price') !!}
		</li>
		<li>
			{!! Form::label('total_price', 'Total_price:') !!}
			{!! Form::text('total_price') !!}
		</li>
		<li>
			{!! Form::label('completed_at', 'Completed_at:') !!}
			{!! Form::text('completed_at') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}