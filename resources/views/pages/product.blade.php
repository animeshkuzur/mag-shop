@extends('layout.master')

@section('style')
	<link href="{{ URL::asset('css/product.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div id="notification" style="display: none;">
 			<span class="dismiss"><a title="dismiss this notification">x</a></span>
		</div>
	@foreach($data as $dat)
	@endforeach
	@foreach($images as $img)
	@endforeach
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="products_img">
				<div id="products_img" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#products_img" data-slide-to="0" class="active"></li>
				    <li data-target="#products_img" data-slide-to="1"></li>
				    <li data-target="#products_img" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="{{ URL::asset('images/products/'.$img->image_1) }}" alt="Chania">
				    </div>

				    <div class="item">
				      <img src="{{ URL::asset('images/products/'.$img->image_2) }}" alt="Chania">
				    </div>

				    <div class="item">
				      <img src="{{ URL::asset('images/products/'.$img->image_3) }}" alt="Flower">
				    </div>
				  </div>

				  <!-- Left and right controls 
				  <a class="left carousel-control" href="#products_img" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#products_img" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a> -->
				</div>
			</div>
			</div>
			<div class="col-md-6">
				<div class="product_content">
					<div class="header_content">
						<h1>{{ $dat->name }}</h1>
						<p>{{ $dat->category }}</p>
						<hr>
					</div>
					<div class="body_content">
						<div class="row">
							<div class="col-md-6">
								<p>
									MRP :&nbsp;&nbsp;<b style="font-size: 25pt;">₹ {{ $dat->price }}</b>
								</p>
							</div>
							<div class="col-md-6">
								<p>
									Players : <b>{{$dat->players}}</b>
								</p>
								<p>
									Duration : <b>{{$dat->duration}}</b>
									
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">

								Age : <b>{{$dat->age}}</b>
								
							</div>
							<div class="col-md-6">
								Dimension : <b>{{$dat->dimensions}}</b>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<p>
									Concept : <b>{{$dat->concept}}</b>
								</p>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<p>
									Description :&nbsp;
									<blockquote>
										<p style="font-size: 15px;">{{$dat->description}}</p>
									</blockquote>
								</p>
								
								<p>
									@if(($dat->units)>0)
									<button class="btn btn-danger btn-lg">ADD TO CARD</button>
									@else
									<div class="row">
										<div class="col-md-4">
											<button class="btn btn-danger btn-lg" disabled="disabled">OUT OF STOCK</button>
										</div>
										<div class="col-md-8">
										{!! Form::open(array('route' => 'notify','method'=>'POST')) !!}
										<div class="row">
											<div class="col-xs-8">
												{!! Form::text('email',null,array('class' => 'form-control input-sm','placeholder' => 'Your email')) !!}
											</div>
											<div class="col-xs-4">
												{!! Form::submit('Notify',array('class'=>'btn btn-primary btn-sm','name'=>'notify')) !!}
											</div>
										</div>											
										{!! Form::close() !!}
										</div>
									</div>
									
									@endif
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>

		


@endsection