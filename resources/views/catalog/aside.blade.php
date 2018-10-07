
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/catalog/aside.css')}}">
@endsection

<div id="category">
	<h3>CATEGORY</h3>
	<ul>
		<li><p>Mens</p>
			<ul>
				<li>1</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</li>
		<li><p>Womens</p>
			<ul>
				<li>1</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</li>
		<li><p>Gadgets</p>
			<ul>
				<li>1</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</li>
		<li><p>Acessories</p>
			<ul>
				<li>1</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</li>
		<li><p>Tools</p>
			<ul>
				<li>1</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</li>
	</ul>
</div>
<div id="filter">
	<h3>FILTER</h3>
	<div class="slidecontainer">
	  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
	</div>
</div>
<div class="leftitems">
	<h3>SHOP BY COLOR</h3>
	<ul>
		<li><span>1</span><span>QNT</span></li>
		<li><span>2</span><span>QNT</span></li>
		<li><span>3</span><span>QNT</span></li>
		<li><span>4</span><span>QNT</span></li>
		<li><span>5</span><span>QNT</span></li>
	</ul>
</div>
<div class="leftitems">
	<h3>SHOP BY SIZE</h3>
	<ul>
		<li><span>1</span><span>QNT</span></li>
		<li><span>2</span><span>QNT</span></li>
		<li><span>3</span><span>QNT</span></li>
		<li><span>4</span><span>QNT</span></li>
		<li><span>5</span><span>QNT</span></li>
	</ul>
</div>		
<div id="latestPrdct">
	<h3>Latest products</h3>
	<div class="card1">
		<img src="images/lamber.JPG" alt="lamber">
		<div>
			<span class="pname">Product name</span><span class="price">1$</span>
		</div>
	</div>
	<div class="card1">
		<img src="images/lamber.JPG" alt="lamber">
		<div>
			<span class="pname">Product name</span><span class="price">1$</span>
		</div>
	</div>
	<div class="card1">
		<img src="images/lamber.JPG" alt="lamber">
		<div>
			<span class="pname">Product name</span><span class="price">1$</span>
		</div>
	</div>
</div>		