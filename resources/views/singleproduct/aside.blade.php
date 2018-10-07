
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/singleproduct/aside.css')}}">
@endsection



<div class="sider">
	<div id="latestPrdct">
		<h4>OUR OFFERS</h4>
		<div class="card1">
			<img src="{{asset('images/lamber.JPG')}}" alt="lamber">
			<div>
				<span class="pname">Product name</span><span class="price">1$</span>
			</div>
		</div>
		<div class="card1">
			<img src="{{asset('images/lamber.JPG')}}" alt="lamber">
			<div>
				<span class="pname">Product name</span><span class="price">1$</span>
			</div>
		</div>
		<div class="card1">
			<img src="{{asset('images/lamber.JPG')}}" alt="lamber">
			<div>
				<span class="pname">Product name</span><span class="price">1$</span>
			</div>
		</div>
	</div>		
	<div id="testimonials">
		<div class="flexdiv">
			<h4>TESTIMONIALS</h4>
			<div>
				<a href="#"><</a>
				<a href="#">></a>
			</div>
		</div>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam labore quisquam velit doloribus quidem, quis necessitatibus quibusdam. Officiis vitae dicta odio repellendus perspiciatis aperiam quia.</p>
		<p class="qoutAuthor">--- Jason Stathem</p>
	</div>
	<div id="banner">
		<img src="{{asset('images/banner.JPG')}}" alt="banner">
	</div>		
</div>