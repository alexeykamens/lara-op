@extends('layouts.parent')


@section('header')
	@include('header')
@endsection

@section('main')
	@include('catalog.main')
	{{-- @include('singleproduct.main') --}}
@endsection
		
@section('footer')
	@include('footer')
@endsection