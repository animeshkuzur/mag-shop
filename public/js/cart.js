    $("#mycart").click(function (e){
    	$("div.cart_body").html("<div class='row'><div class='col-xs-3'><b>Product Name</b></div><div class='col-xs-2'><b>Units</b></div><div class='col-xs-3'><b>Price</b></div><div class='col-xs-3'><b>Total Price</b></div><div class='col-xs-2'></div></div>");
    	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        e.preventDefault();
        $.ajax({
        	type:"GET",
        	url : '/mag/public/getproducts',
        	dataType : 'json',
        	success : function(data){
        		if(data.data){
        			var total = 0;
        			$.each(data.data, function(index,value){
        				$("div.cart_body").append("<div class='row'><div class='col-xs-3'>"+value.name+"</div><div class='col-xs-2'>"+value.units+"</div><div class='col-xs-3'>₹"+value.price+"</div><div class='col-xs-2'>₹"+value.price*value.units+".00</div><div class='col-xs-2'><a id='deleteproduct' href='/mag/public/deleteproduct/"+value.product_id+"'><span class='glyphicon glyphicon-trash'></span></a></div></div>");
        				total = total + value.price*value.units;
        			});

        			$("div.cart_total").html("Total : ₹<b>"+total+"</b>");
        		}
        		else{
        			$("div.cart_body").html("<div class='row'><div class='col-md-12'><h4 style='text-align:center;'>Empty Cart!</h4></div></div>");
        		}
        	},
        	error: function(data){

        	}
        }); 
    });

    $(document).on('click','#deleteproduct',function (e){
        e.preventDefault();
        $("div.cart_body").html("<div class='row'><div class='col-xs-3'><b>Product Name</b></div><div class='col-xs-2'><b>Units</b></div><div class='col-xs-3'><b>Price</b></div><div class='col-xs-3'><b>Total Price</b></div><div class='col-xs-2'></div></div>");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        var apiurl = $(this).attr('href');
        $.ajax({
            type:"POST",
            url : apiurl,
            dataType : 'json',
            success : function(data){
                if(data.data){
                    var total = 0;
                    $.each(data.data, function(index,value){
                        $("div.cart_body").append("<div class='row'><div class='col-xs-3'>"+value.name+"</div><div class='col-xs-2'>"+value.units+"</div><div class='col-xs-3'>₹"+value.price+"</div><div class='col-xs-2'>₹"+value.price*value.units+".00</div><div class='col-xs-2'><a id='deleteproduct' href='/mag/public/deleteproduct/"+value.product_id+"'><span class='glyphicon glyphicon-trash'></span></a></div></div>");
                        total = total + value.price*value.units;
                    });
                    $("#procount").text(data.items);
                    $("#procount2").text(data.items);

                    $("div.cart_total").html("Total : ₹<b>"+total+"</b>");
                }
                else{
                    $("div.cart_body").html("<div class='row'><div class='col-md-12'><h4 style='text-align:center;'>Empty Cart!</h4></div></div>");
                }
            },
            error: function(data){

            }
        }); 
    });

    