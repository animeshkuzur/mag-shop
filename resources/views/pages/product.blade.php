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
									<div class="row">
									<div class="col-md-4">
									<button class="btn btn-danger btn-lg" id="addtocart">ADD TO CART</button>
									</div>
									<div class="col-md-3">
									<div class="input-group">
								          <span class="input-group-btn">
								              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
								                  <span class="glyphicon glyphicon-minus"></span>
								              </button>
								          </span>
								          <input type="text" name="quant[1]" class="form-control input-number" value="1" id="quantity_value">
								          <span class="input-group-btn">
								              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
								                  <span class="glyphicon glyphicon-plus"></span>
								              </button>
								          </span>
								    </div>
								    </div>
								    <div class="col-md-5"></div>
								    </div>
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

	
	<script type="text/javascript">
	$("#addtocart").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        e.preventDefault(); 
        var quantity = $("#quantity_value").val();
        var data = { 'product_id': {{ $dat->id }}, 'quantity' : quantity }
        $.ajax({
	        type:"POST",
	        url:'/mag/public/addproduct',
	        data: data,
	        dataType: 'json',
	        success: function(data){
	        	//console.log(data);
	        	$.notify('Product added to cart',{
	        		position: 'bottom center',
	        		autoHideDelay: 2000,
	        		className: 'success',
	        	});
	            $("#procount").text(data);
	            $("#procount2").text(data);
	        },
	        error: function(data){
	        	console.log(data);
	        }
    	});
    });


    $( document ).ready(function() {
    $('.btn-number').click(function(e){
        e.preventDefault();
        
        var fieldName = $(this).attr('data-field');
        var type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                var minValue = parseInt(input.attr('min')); 
                if(!minValue) minValue = 1;
                if(currentVal > minValue) {
                    input.val(currentVal - 1).change();
                } 
                if(parseInt(input.val()) == minValue) {
                    $(this).attr('disabled', true);
                }
    
            } else if(type == 'plus') {
                var maxValue = parseInt(input.attr('max'));
                if(!maxValue) maxValue = 4;
                if(currentVal < maxValue) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == maxValue) {
                    $(this).attr('disabled', true);
                }
    
            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {
        
        var minValue =  parseInt($(this).attr('min'));
        var maxValue =  parseInt($(this).attr('max'));
        if(!minValue) minValue = 1;
        if(!maxValue) maxValue = 4;
        var valueCurrent = parseInt($(this).val());
        
        var name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        
        
    });
    $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                 // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
    });
});

    

    
    
	</script>


@endsection