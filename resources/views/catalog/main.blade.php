
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/catalog/main.css')}}">
@endsection


<div class="topper">
	<div class="carousel">
		<img src="{{asset('images/carousel.JPG')}}" alt="carousel">
	</div>

	 <div class="underCartBar">
		<div>
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li>Shop</li>
			</ul>
		</div>
		<div>
			Showing 1-12 of 74 results
		</div>
	</div>

	<div class="mainbar">
		<div class="barname">SHOP WITH SIDEBAR</div>
		<div class="sort">
			<div>
				<i class="fas fa-align-justify"></i>
			</div>
			<div>
				<i class="fas fa-th-large"></i>
			</div>
			<form action="" method="post">
			   <select size="1">
			    <option disabled>Выберите героя</option>
			    <option value="Чебурашка">Чебурашка</option>
			    <option selected value="Крокодил Гена">Крокодил Гена</option>
			    <option value="Шапокляк">Шапокляк</option>
			    <option value="Крыса Лариса">Крыса Лариса</option>
			   </select>
			</form>					
		</div>
	</div>
</div>
{{-- {{print_r($products)}} --}}


<aside class="left">
			@include('catalog.aside')
</aside>

<div class="products">
	@foreach ($products as $product)
		<a href="../product/{{$product->id}}">
			<section>
			   	<img src="{{$product->imgExistReturn($product->url, 1)}}" alt="product">
				<span class="productCat">{{$product->category->name}}</span>
				<span class="productName">{{$product->name}}</span>
				<span class="productPrice">${{$product->price}}</span>
			</section>
		</a>
	@endforeach
</div>
<div class="pages">
	{{$products->links()}}
</div>