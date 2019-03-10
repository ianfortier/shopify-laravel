{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('transaction_id', 'Transaction_id:') !!}
			{!! Form::text('transaction_id') !!}
		</li>
		<li>
			{!! Form::label('amount', 'Amount:') !!}
			{!! Form::text('amount') !!}
		</li>
		<li>
			{!! Form::label('authorization', 'Authorization:') !!}
			{!! Form::text('authorization') !!}
		</li>
		<li>
			{!! Form::label('currency', 'Currency:') !!}
			{!! Form::text('currency') !!}
		</li>
		<li>
			{!! Form::label('device_id', 'Device_id:') !!}
			{!! Form::text('device_id') !!}
		</li>
		<li>
			{!! Form::label('error_code', 'Error_code:') !!}
			{!! Form::text('error_code') !!}
		</li>
		<li>
			{!! Form::label('gateway', 'Gateway:') !!}
			{!! Form::text('gateway') !!}
		</li>
		<li>
			{!! Form::label('kind', 'Kind:') !!}
			{!! Form::text('kind') !!}
		</li>
		<li>
			{!! Form::label('message', 'Message:') !!}
			{!! Form::text('message') !!}
		</li>
		<li>
			{!! Form::label('order_id', 'Order_id:') !!}
			{!! Form::text('order_id') !!}
		</li>
		<li>
			{!! Form::label('payment_details', 'Payment_details:') !!}
			{!! Form::textarea('payment_details') !!}
		</li>
		<li>
			{!! Form::label('parent_id', 'Parent_id:') !!}
			{!! Form::text('parent_id') !!}
		</li>
		<li>
			{!! Form::label('receipt', 'Receipt:') !!}
			{!! Form::textarea('receipt') !!}
		</li>
		<li>
			{!! Form::label('source_name', 'Source_name:') !!}
			{!! Form::text('source_name') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('test', 'Test:') !!}
			{!! Form::text('test') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}