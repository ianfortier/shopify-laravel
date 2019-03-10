{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('refund_id', 'Refund_id:') !!}
			{!! Form::text('refund_id') !!}
		</li>
		<li>
			{!! Form::label('note', 'Note:') !!}
			{!! Form::text('note') !!}
		</li>
		<li>
			{!! Form::label('order_adjustments', 'Order_adjustments:') !!}
			{!! Form::textarea('order_adjustments') !!}
		</li>
		<li>
			{!! Form::label('processed_at', 'Processed_at:') !!}
			{!! Form::text('processed_at') !!}
		</li>
		<li>
			{!! Form::label('refund_line_items', 'Refund_line_items:') !!}
			{!! Form::textarea('refund_line_items') !!}
		</li>
		<li>
			{!! Form::label('transactions', 'Transactions:') !!}
			{!! Form::textarea('transactions') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::label('currency', 'Currency:') !!}
			{!! Form::text('currency') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}