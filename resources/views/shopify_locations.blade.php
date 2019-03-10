{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('shop_id', 'Shop_id:') !!}
			{!! Form::text('shop_id') !!}
		</li>
		<li>
			{!! Form::label('location_id', 'Location_id:') !!}
			{!! Form::text('location_id') !!}
		</li>
		<li>
			{!! Form::label('legacy', 'Legacy:') !!}
			{!! Form::text('legacy') !!}
		</li>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('address1', 'Address1:') !!}
			{!! Form::text('address1') !!}
		</li>
		<li>
			{!! Form::label('address2', 'Address2:') !!}
			{!! Form::text('address2') !!}
		</li>
		<li>
			{!! Form::label('zip', 'Zip:') !!}
			{!! Form::text('zip') !!}
		</li>
		<li>
			{!! Form::label('city', 'City:') !!}
			{!! Form::text('city') !!}
		</li>
		<li>
			{!! Form::label('province', 'Province:') !!}
			{!! Form::text('province') !!}
		</li>
		<li>
			{!! Form::label('country', 'Country:') !!}
			{!! Form::text('country') !!}
		</li>
		<li>
			{!! Form::label('phone', 'Phone:') !!}
			{!! Form::text('phone') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}