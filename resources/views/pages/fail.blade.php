@extends('layout.master')

@section('style')
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/fail.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="container">
		<br>
		<div class="alert alert-danger" role="alert">
		<strong>Payment Failed!</strong> Please Try Again!
		</div>
		<br>
		<div class="continue_button">
			<a href="{{ url('/checkout') }}" class="btn btn-danger btn-lg">Checkout Again</a>
		</div>
		<br>
	</div>
@endsection