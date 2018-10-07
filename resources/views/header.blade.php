@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/header.css')}}">
@endsection

@section('meta')
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

<script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
</script>

<div class="loginbar">
	<div>
	    @if (Auth::guest())
	        <a href="{{ url('/login') }}">Login</a>
	        <a href="{{ url('/register') }}">Register</a>
	    @else
	        <a href="{{ url('/logout') }}" 
	        	onclick="event.preventDefault();
	        	document.getElementById('logout-form').submit();">
	             Logout
	        </a>

	        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	            {{ csrf_field() }}
	        </form>
	    @endif
		<a href="#">Settings</a>
	</div>
</div>
<div class="statusbar">
	<div class="welcome">
		<span>Welcome</span>@if (!Auth::guest())<span>{{', '.Auth::user()->name }}</span>
		@endif

	</div>
	<div class="logo">
		<a href="#">
			<img src="{{asset('images/logo.png')}}" alt="logo">
		</a>
	</div>

	<div class="cart">
		<a href="{{url('cart')}}">Shopingcart</a>
		<div class="cartQnt">{{count(session('cart'))}}</div>
	</div>
</div>
<nav>
	<ul>
		
		{{-- @inject('categories', 'Categories') --}}
		<li><a href="../product">All Categories</a></li>
		@foreach ($categories as $category)
		<li><a href="{{url('category/'.$category->id)}}">{{$category->name}}</a></li>
		@endforeach
		<li>search <i class="fas fa-search"></i></li>
	</ul>
</nav>
<div class="salebar">
	<ul>
		<li>Got a question</li>
		<li>Free shipping</li>
		<li>Get 15% off</li>
	</ul>
</div>
<script src="/js/app.js"></script>