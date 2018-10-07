
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/singleproduct/main.css')}}">
@endsection


<div class="innerwraper">
	<div class="productPhoto">
		<img class="preview" src="{{$currentproduct->imgExistReturn($currentproduct->url, 1)}}" alt="productPhoto">
		<br>
		@for ($i = 0; $i < 5; $i++)
			@if ($currentproduct->imgExist($currentproduct->url, $i))
			<img class="avelibleImg" src="{{$currentproduct->imgExistReturn($currentproduct->url, $i)}}" alt="productPhoto">
			@endif
		@endfor


	</div>
	<div class="chooser">
		<h3>Name: {{$currentproduct->name}}</h3>
		<h3>Category: {{$currentproduct->category->name}}</h3>
		<h3>Price: {{$currentproduct->price}}</h3>
		 {{-- {{dump($data)}}  --}}

		{!!Form::open(['action' => ['CartController@store']])!!}
			<div class="form-group">
		      {!! Form::label('qtt', 'quantity') !!}
		      {!! Form::number('qtt', 1, ['min'=>'1']) !!}
		      {!! Form::hidden('cartData', serialize(array($id))) !!}
		    </div>
		    <button class="btn btn-success" type="submit">Add to cart</button>
		{!! Form::close() !!}
		{{-- <form action="">
			<label for="qtt">Quantity</label>
			<input type="number" name="qtt" value="1" min="1" max="100">
			<button class="btn btn-success" type="submit">Add to cart</button>
		</form> --}}
		
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum ut sequi a quidem illo excepturi placeat asperiores velit repellendus, in harum, commodi natus assumenda porro. Odio quo obcaecati voluptatum, a! Impedit, ipsam accusantium nesciunt enim et voluptatem eum animi quia. Totam sunt, maxime libero. Nam, id minima sapiente provident, aut dignissimos fuga unde similique facere dolores fugit tempora? Repudiandae tenetur perferendis fuga veritatis, facere aliquam impedit quisquam dolore modi quaerat ipsam id, voluptate tempore tempora voluptates distinctio excepturi maiores molestiae commodi harum ea fugiat delectus molestias numquam! Eaque tempore labore quo possimus, eius odio ratione libero, laborum minus culpa molestiae cupiditate deserunt amet velit consectetur iusto optio quasi minima. Placeat quasi nam maiores sapiente reiciendis quis magni vitae expedita velit ducimus similique rem suscipit numquam, deleniti enim dolor distinctio optio omnis? Maiores sed dolorum accusantium a molestiae cum, officia, rerum iste sequi. Excepturi sed aut architecto molestias cumque sit ipsum unde eligendi dolorem quaerat, ratione illo totam laudantium id dolores vero doloremque veritatis possimus consequatur quidem numquam non ullam. Recusandae natus, adipisci laboriosam totam veniam delectus praesentium quasi quibusdam quo enim itaque expedita esse labore velit provident distinctio quisquam magnam est amet dolore obcaecati placeat voluptas qui rem? Soluta, ullam.
	</div>
	<div class="descript">
		{{$currentproduct->description}}
	</div>
	<div class="relproduct">
		<h3>RELATED PRODUCTS</h3>
		<div class="products">
			@foreach ($relatedproducts as $product)
				<section>
				   	<img src="{{$product->imgExistReturn($product->url, 1)}}" alt="product">
					<span class="productCat">{{$product->category->name}}</span>
					<span class="productName">{{$product->name}}</span>
					<span class="productPrice">${{$product->price}}</span>
				</section>
			@endforeach
		</div>
	</div>

	@include('singleproduct.aside')
</div
