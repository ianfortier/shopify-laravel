{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('invitation_code', 'Invitation_code:') !!}
			{!! Form::text('invitation_code') !!}
		</li>
		<li>
			{!! Form::label('expired_at', 'Expired_at:') !!}
			{!! Form::text('expired_at') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}