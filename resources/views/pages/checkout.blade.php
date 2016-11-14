@extends('layout.master')

@section('style')
	<link href="{{ URL::asset('css/checkout.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="">
					<h2>Checkout</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<hr>
			</div>
			<div class="col-md-7"></div>
		</div>
			
		<div class="row">
			{!! Form::open(array('route' => 'payment','method'=>'POST')) !!}
			<div class="col-xs-5">
			<div class="row">
				<div class="col-md-12">
					@if($errors)
				@if(count($errors))
					@foreach($errors->all() as $error)	
						<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						{{ $error }}
						</div>
					@endforeach				
				@endif
			@endif
				</div>
			</div>
				<div class="row">
					<div class="col-md-3">
						Name : 
					</div>
					<div class="col-md-9">
						{!! Form::text('name', null, array('class' => 'form-control input-sm','placeholder'=>'Name')) !!}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3">
						Email : 
					</div>
					<div class="col-md-9">
						{!! Form::text('email', null, array('class' => 'form-control input-sm','placeholder'=>'Email')) !!}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3">
						Phone :
					</div>
					<div class="col-md-9">
						{!! Form::text('phone', null, array('class' => 'form-control input-sm','placeholder'=>'Phone')) !!}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3">
						Address :
					</div>
					<div class="col-md-9">
						{!! Form::textarea('address', null, array('class' => 'form-control input-sm','placeholder'=>'Address','size' => '4x4')) !!}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3">
						City :
					</div>
					<div class="col-md-9">
						{!! Form::text('city', null, array('class' => 'form-control input-sm','placeholder'=>'City')) !!}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3">
						State :
					</div>
					<div class="col-md-9">
						{!! Form::text('state', null, array('class' => 'form-control input-sm','placeholder'=>'State')) !!}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3">
						Zipcode :
					</div>
					<div class="col-md-9">
						{!! Form::text('zipcode', null, array('class' => 'form-control input-sm','placeholder'=>'Zipcode')) !!}
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-3">
						Country :
					</div>
					<div class="col-md-9">
						{!! Form::text('country', null, array('class' => 'form-control input-sm','placeholder'=>'Country')) !!}
					</div>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<img src="{{ URL::asset('images/checkout.jpg') }}" class="img-responsive">
					</div>
					<div class="col-md-2"></div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-4">
								
							</div>
							<div class="col-md-8">
								<b style="text-align: right;font-size: 16px;display: inline;">Total : ₹{{ $price }}.00</b>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								
							</div>
							<div class="col-md-8">
								<b style="text-align: right;font-size: 16px;display: inline;">Items : {{ $items }}</b>
							</div>
						</div>
					</div>
				

					<div class="col-md-6">
						<div class="payment-btn">
							{!! Form::submit('Proceed to Payment', array('class' => 'btn btn-danger btn-block btn-lg','value'=>'LOGIN')) !!}
						</div>
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>


@endsection