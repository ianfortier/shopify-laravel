{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('addresses', 'Addresses:') !!}
			{!! Form::textarea('addresses') !!}
		</li>
		<li>
			{!! Form::label('accepts_marketing', 'Accepts_marketing:') !!}
			{!! Form::text('accepts_marketing') !!}
		</li>
		<li>
			{!! Form::label('default_address', 'Default_address:') !!}
			{!! Form::textarea('default_address') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('phone', 'Phone:') !!}
			{!! Form::text('phone') !!}
		</li>
		<li>
			{!! Form::label('first_name', 'First_name:') !!}
			{!! Form::text('first_name') !!}
		</li>
		<li>
			{!! Form::label('customer_id', 'Customer_id:') !!}
			{!! Form::text('customer_id') !!}
		</li>
		<li>
			{!! Form::label('multipass_identifier', 'Multipass_identifier:') !!}
			{!! Form::text('multipass_identifier') !!}
		</li>
		<li>
			{!! Form::label('last_name', 'Last_name:') !!}
			{!! Form::text('last_name') !!}
		</li>
		<li>
			{!! Form::label('last_order_id', 'Last_order_id:') !!}
			{!! Form::text('last_order_id') !!}
		</li>
		<li>
			{!! Form::label('last_order_name', 'Last_order_name:') !!}
			{!! Form::text('last_order_name') !!}
		</li>
		<li>
			{!! Form::label('note', 'Note:') !!}
			{!! Form::textarea('note') !!}
		</li>
		<li>
			{!! Form::label('orders_count', 'Orders_count:') !!}
			{!! Form::text('orders_count') !!}
		</li>
		<li>
			{!! Form::label('state', 'State:') !!}
			{!! Form::text('state') !!}
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
			{!! Form::label('total_spent', 'Total_spent:') !!}
			{!! Form::text('total_spent') !!}
		</li>
		<li>
			{!! Form::label('verified_email', 'Verified_email:') !!}
			{!! Form::text('verified_email') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}