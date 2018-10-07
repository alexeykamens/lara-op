@extends('layouts.admin')

@section('title')
	Add new product
@endsection

@section('main')
	<div class="container">
		<div class="col-md-12">
	
		@if (null !==session('errors'))
			<div class="alert alert-danger">
				@foreach(session('errors')->all() as $error)
					{{$error}} <br>
				@endforeach
			</div>
		@endif



		{{-- {!! Form::open(['url' => 'adminpanel/products', 'method'=>'post']) !!} --}}
	 
		{!!Form::model($product, ['url' => 'adminpanel/products', 'method'=>'post', 'files'=>true])!!}
			<div class="form-group">
		      {!! Form::label('name', 'Name') !!}
		      {!! Form::text('name', '', ['class' => 'form-control']) !!}
		    </div>
		    <div class="form-group">
		      {!! Form::label('price', 'Price') !!}
		      {!! Form::text('price', '', ['class' => 'form-control']) !!}
		    </div>
		    <div class="form-group">
		      {!! Form::label('description', 'Description') !!}
		      {!! Form::text('description', '', ['class' => 'form-control']) !!}
		    </div>
		    <div class="form-group">
		      {!! Form::label('category_id', 'Category') !!}
		      {!! Form::select('category_id', $categories); !!}
		    </div>
		     <div class="form-group">
		      {!! Form::label('image[]', 'Image') !!}
		      {!! Form::file('image[]', ['multiple']) !!}
		    </div>
		    <div class="form-group">
		      {!! Form::label('instock', 'In stock') !!}
		      {!! Form::checkbox('instock', 1, $product->instock); !!}
		    </div>


		   


		  {{--   <div class="form-group">
		      {!! Form::label('', 'Model') !!}
		      {!! Form::text('model', '', ['class' => 'form-control']) !!}
		    </div> --}}
		     <button class="btn btn-success" type="submit">Add product!</button>
		{!! Form::close() !!}
		</div>
	</div>
@endsection
		
<style>
	img{width:30px; height:30px;}
	td,th{padding: 5px !important;}
</style>