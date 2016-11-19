@extends('layout.master')

	@section('style')
		<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	@endsection

	@section('content')

		<div class="container">
			<img src="{{ URL::asset('images/404.png') }}" class="img-responsive">
		</div>


	@endsection