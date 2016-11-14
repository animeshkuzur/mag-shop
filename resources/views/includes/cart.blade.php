<!--CART-->
	<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          	<span aria-hidden="true">&times;</span>
		        	</button>
		        	<h4 class="modal-title" id="myModalLabel">Shopping Cart (<span id="procount">{{ $items }}</span>)</h4>
			    </div>
			    <div class="modal-body">
			    	<div class="cart_body">
			    		
			    	</div>
		    	    
		    	    <hr>
		    	    <div class="row">
		    	    	<div class="col-xs-3"></div>
		    	    	<div class="col-xs-3"></div>
		    	    	<div class="col-xs-3"></div>
		    	    	<div class="col-xs-3">
		    	    		<div class="cart_total">
		    	    			
		    	    		</div> 
		    	    	</div>
		    	    </div>
				</div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        	<a href="{{ url('/checkout') }}" class="btn btn-danger">Check Out</a>
		      	</div>
		    </div>
	  	</div>
	</div>
	<script src="{{ URL::asset('js/cart.js') }}"></script>