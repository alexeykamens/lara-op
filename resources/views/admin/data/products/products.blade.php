@extends('layouts.admin')

@section('title')
	Products
@endsection

@section('main')
	<div class="container">
		<div class="col-md-12">
			
			@if (session('success'))
				<div class="alert alert-success">
					{{session('success')}}
				</div>
			@endif
			
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">ID</th>
			      <th scope="col">NAME</th>
			      <th scope="col">PRICE</th>
			      <th scope="col">CATEGORY</th>
			      <th scope="col">DESCRIPTION</th>
			      <th scope="col">IMAGES</th>
			      <th scope="col">EDIT</th>
			      <th scope="col">IN STOCK</th>
			      <th scope="col">DELETE</th>
			    </tr>
			  </thead>
			  <tbody>
			    
			      @foreach($products as $product)
				    <tr>
				      <th scope="row">{{$loop->iteration}}</th>
				      <td>{{$product->id}}</td>
				      <td>{{$product->name}}</td>
				      <td>{{$product->price}}</td>
				      <td>{{$product->category->name}}</td>
				      <td>{{str_limit($product->description, 10)}}</td>
				      <td>
							@for ($i = 1; $i < 6; $i++)
								@if ($product->imgExist($product->url, $i))
								<img class="avelibleImg" src="{{$product->imgExistReturn($product->url, $i)}}" alt="productPhoto">
								@endif
							@endfor
				      </td>
				      <td><a href="{{url('adminpanel/products/'.$product->id.'/edit')}}">Edit</a></td>
				      <td>
						{!! Form::open(['url' => '/adminpanel/products/'.$product->id, 'method'=>'put']) !!}
						   <div class="form-group">
		      					{!! Form::checkbox('instock', 1, $product->instock, ['onChange'=>'this.form.submit()']);!!}
						   </div>
						{!! Form::close() !!}
				      </td>
				      <td>
						{!! Form::open(['url' => '/adminpanel/products/'.$product->id, 'method'=>'DELETE']) !!}
						   <div class="form-group">
						   		{!!Form::submit('X')!!}
						   </div>
						{!! Form::close() !!}
				      </td>
				    </tr>
			      @endforeach
			    
			   
			  </tbody>
			</table>
		<a href="{{url('adminpanel/products/create')}}" class="btn btn-dark"> Add product</a>
		{{ $products->links("pagination::bootstrap-4") }}
		</div>
	</div>
@endsection
		
<style>
	img{width:30px; height:30px;}
	td,th{padding: 5px !important;}
</style>