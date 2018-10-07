
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/singleproduct/main.css')}}">
@endsection

	{{-- <p>{{dump(session('cart'))}}</p>
	<p>{{dump(session()->all())}}</p> --}}
			{!!Form::open(['action' => ['CartController@destroy'], 'method' => 'delete'])!!}
			  {!! Form::hidden('i', 'all') !!}
		   	  {!!Form::submit('Clear cart');!!}
			{!! Form::close() !!}

	@for ($i = 0; $i < count($cart); $i++)

		<p>
			id: {{$cart[$i]['id']}}, quantity: {{$cart[$i]['qtt']}}, 
			
			@if (isset($cart[$i]['img']) )
				<img src="{{$cart[$i]['img']}}" alt="product">
			@endif

			@if (isset($cart[$i]['price']))
				price: {{$cart[$i]['price']}},
				Position total: {{$cart[$i]['price']*$cart[$i]['qtt']}}
			@endif

			{!!Form::open(['action' => ['CartController@destroy'], 'method' => 'delete'])!!}
			  {!! Form::hidden('i', $i) !!}
		   	  {!!Form::submit('X');!!}
			{!! Form::close() !!}
		</p>
	@endfor
	<p>Total: {{$total}}</p>