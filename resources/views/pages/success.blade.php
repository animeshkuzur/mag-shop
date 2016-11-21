@extends('layout.master')

@section('style')
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/success.css') }}" rel="stylesheet">
@endsection

@section('content')
		
	<div class="container">
	<br>
	<div class="alert alert-success" role="alert">
	<strong>Payment Successful!</strong> Thank you for shoping with us. Below is the payment receipt.
	</div>
		<div class="border">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h3>Payment Receipt</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				Date: {{$data['addedon']}}
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				Transaction Id: {{$data['txnid']}}
			</div>
			<div class="col-md-6" style="text-align: right;">
				Payment ID : {{$data['mihpayid']}}
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-3">
				Shipping Address :
				<p>{{$data['firstname']}}<br>
				{{$data['address1']}}<br>
				{{$data['city']}}<br>
				{{$data['country']}}
				{{$data['zipcode']}}
				</p>
			</div>
			<div class="col-md-6">
				
			</div>
			<div class="col-md-3">
				Contact Details:
				<p>{{$data['email']}}<br>
				{{$data['phone']}}
				</p>
			</div>
		</div>
		<hr>
		@foreach($product as $pro)
		<div class="row">
			<div class="col-md-2">
				{{$pro->units}}
			</div>
			<div class="col-md-3">
				{{$pro->name}}<br>
				{{$pro->category}}
			</div>
			<div class="col-md-2">
				{{$pro->price}}
			</div>
			<div class="col-md-2">
				{{$pro->price}}x{{$pro->units}}
			</div>
			<div class="col-md-3">
				{{$pro->price*$pro->units}}.00
			</div>
		</div>
		<br>
			@endforeach
		<hr>
		<div class="row">
			<div class="col-md-12">
				Grand Total : {{$data['amount']}}
			</div>
			
		</div>
		</div>
		<br>
		<div class="continue_button">
			<a href="{{ url('/') }}#product" class="btn btn-danger btn-lg">Continue Shopping</a>
		</div>
		<br>
	</div>
@endsection