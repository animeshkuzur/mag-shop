@extends('layout.master')

	@section('style')
		<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	@endsection

	@section('content')

		<div id="notification" style="display: none;">
 			<span class="dismiss"><a title="dismiss this notification">x</a></span>
		</div>
										
		<div class="main">
	

	<div class="mainpage" id="mainpage">
	<div class="container" style="margin-top: 80px;">
		<div class="text-vertical-center">
	        	<img src="{{ URL::asset('images/MAG_logo1.png') }}" class="img-responsive">
	        	
	            <h3>Welcome to</h3>
	            <h1>THE WORLD OF GAMES</h1>
	            <h4>where Math is fun!</h4>
	            <br><br><br>
	            <a href="#comic" class="btn btn-lg btn-danger">EXPLORE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#product" class="btn btn-lg btn-danger">BUY</a>
        	</div>        
	</div>	
	</div>

	<div class="comic" id="comic">
	<div class="container" style="margin-top: 80px;">
		<div class="row box1">
			<div class="col-xs-4 col1">
				
			</div>
			<div class="col-xs-4 col2">
				
			</div>
			<div class="col-xs-4 col3">
				
			</div>	
		</div>
		<br>
		<div class="row box1">
			<div class="col-xs-4 col4">
				
			</div>
			<div class="col-xs-4 col5">
				
			</div>
			<div class="col-xs-4 col6">
				
			</div>
		</div>
	</div>	
	</div>


	<div class="product" id="product">
		<br><br><br><br><br>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6 pro">
					<img src="{{ URL::asset('images/products/product2_1.JPG') }}" class="img-responsive">
					<h3>TUM YUM</h3>
					<p class="productDescription" >It's a 2 player Card based game to develop an understanding of Integers and Integer Operations. This game enables the players to polish their mathematical skills and improve meta-cognition</p>
					<!--<button class="btn btn-lg btn-primary" type="button" data-toggle="modal" data-target="#myModal1">BUY</button>-->
					<a href="{{ url('/product/2') }}" class="btn btn-lg btn-primary" type="button" >BUY</a>
				</div>




				<div class="col-md-6 pro">
					<img src="{{ URL::asset('images/products/product1_3.JPG') }}" class="img-responsive">
					<h3>SHORES</h3>
					<p class="productDescription" >It's a 2-4 player game to help students understand the two dimensional co-ordinate system. This ocean adventure game makes learning math super fun and easy and sharpens your analytical skills</p>
					<!--<button class="btn btn-lg btn-primary" type="button" data-toggle="modal" data-target="#myModal2">BUY</button>-->
					<a href="{{ url('/product/2') }}" class="btn btn-lg btn-primary" type="button" >BUY</a>
				</div>
				<!--<div class="col-md-4 pro">
					<img src="images/product3.jpg" class="img-responsive">
					<h3>Product 3 Name</h3>
					<p>Product description product description product description product description product description product description</p>
					<button class="btn btn-lg btn-primary" type="button" data-toggle="modal" data-target="#myModal3">BUY</button>
				</div>-->
			</div>
		</div>
	</div>


<div class="container">
    <div class="row text-center" id="userspace">
    	<h1>WHAT THEY SAY</h1>
        <div class="col-sm-8">
        	<img src="{{ URL::asset('images/6_testimonials.jpg') }}" width="100%" height="100%" >
        </div>

        <div class="col-md-4 text-center add" id="FeedbackForm" width="110%">
            <h4><strong>Leave a comment</strong></h4>
            <div class="row" width="50%">	
				<div class="col-md-8 form">
					<form role="form" action="{{ url('/')}}" method="POST">
                		<div class="form-group">
					    	<label for="name">Name:</label>
					    	<input type="text" name="name" class="form-control" placeholder="Name" >
					    	<p class='text-danger'></p>					  	</div>
						<div class="form-group">
							<label for="relation">Relation(Parent/Teacher/Student):</label>
					    	<input type="text" name="relation" class="form-control" id="relation" placeholder="Parent">
					    	<p class='text-danger'></p>					  	</div>
					  	<div class="form-group">
					    		<label for="email">Email address:</label>
						    	<input type="text" name="email" class="form-control" id="email" placeholder="Email">
					    		<p class='text-danger'></p>					  	</div>
					    <div class="form-group">
						    <label for="exampleTextarea">Feedback</label>
						    <textarea name="message" class="form-control" id="exampleTextarea" rows="4" placeholder="Feedback"></textarea>
						    <p class='text-danger'></p>						</div>
					  	<input type="submit" name="submit" class="btn btn-default" >
					</form>
				</div>
				
			</div>
                     
        </div>
    </div>		
</div>




	<!-- Why -->
<div id="why" class="why">

  	<div >
    	<div class="col-md-12">
	      	<div class="carousel1 slide" data-ride="carousel" id="quote-carousel">
	      
	<!-- Bottom Carousel Indicators -->
				<ol class="carousel-indicators">
	  				<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
	  				<li data-target="#quote-carousel" data-slide-to="1"></li>
	  				<li data-target="#quote-carousel" data-slide-to="2"></li>
				</ol>
	        
	<!-- Carousel Slides / Quotes -->
				<div class="carousel-inner">

	<!-- Quote 1 -->
					<div class="item active">
		  				<div class="row">
		    				<div id="why1" class="col-sm-12">
		      					<img class="whyImage" src="{{ URL::asset('images/2_Why_1.jpg') }}" width="100%" height="100%" >
		    				</div>
		  				</div>
					</div>

	<!-- Quote 2 -->
					<div class="item">
		  				<div class="row">
		    				<div class="col-sm-12">
		      					<img class="whyImage" src="{{ URL::asset('images/3_Why_2.jpg') }}" width="100%" height="100%" >
		    				</div>
		  				</div>
					</div>

	<!-- Quote 3 -->
					<div class="item">
		  				<div class="row">
		    				<div class="col-sm-12">
		      					<img class="whyImage" src="{{ URL::asset('images/4_Why_3.jpg') }}" width="100%" height="100%" >
		    				</div>
		  				</div>
					</div>
	  
				</div>
	        

			</div>                          
		</div>
	</div>
</div>

	<!--<div class="blog" id="blog">
		<br><br><br><br><br>
		<div class="container">	
			<div class="row text-center">
				<div class="col-md-6 pro">
						<a style="display: block;" class="blogBlock" href="blog1.php">
<h2>How it all started</h2>
<p>Steve Jobs very aptly said, 'You can't connect the dots looking forward; you can only connect them looking backwards. So you have to trust that the dots will somehow connect in your future.' So back then when we started it, little did we realize that one day our project would be our product!
Me and my co-founder Atul, ...</p>
						</a>
				</div>
				<div class="col-md-6 pro">
					<a style="display: block;" class="blogBlock" href="blog1.php">
<h2>How it all started</h2>
<p>Steve Jobs very aptly said, 'You can't connect the dots looking forward; you can only connect them looking backwards. So you have to trust that the dots will somehow connect in your future.' So back then when we started it, little did we realize that one day our project would be our product!
Me and my co-founder Atul, ...</p>
					</a>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-6 pro">
						<a style="display: block;" class="blogBlock" href="blog1.php">
<h2>How it all started</h2>
<p>Steve Jobs very aptly said, 'You can't connect the dots looking forward; you can only connect them looking backwards. So you have to trust that the dots will somehow connect in your future.' So back then when we started it, little did we realize that one day our project would be our product!
Me and my co-founder Atul, ...</p>
						</a>
				</div>
				<div class="col-md-6 pro">
					<a style="display: block;" class="blogBlock" href="blog1.php">
<h2>How it all started</h2>
<p>Steve Jobs very aptly said, 'You can't connect the dots looking forward; you can only connect them looking backwards. So you have to trust that the dots will somehow connect in your future.' So back then when we started it, little did we realize that one day our project would be our product!
Me and my co-founder Atul, ...</p>
					</a>
				</div>
			</div>
		</div>
		<div class="row text-center"> 
			<a href="blog.php">more...</a>
		</div>
	</div>-->


	<!-- Team -->
    <div id="team" class="team">
        <div class="container">
            <div class="row text-center">
            	<h1>OUR TEAM</h1><br><br>
            	</div>
            <!-- /.row -->                   
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="service-item">
                                <img src="{{ URL::asset('images/era.jpg')}}" class="img-responsive img-circle">
                                
                            </div>
                                <h4>
                                    <strong>ERA</strong>
                                </h4>
                                <p>Co-Founder</p>
                                <p>Research Head</p>
                                <p>Maths Hons. (St. Stephen's)</p>
                                <p>Msc. Maths Education</p>
                                <a href="mailto:era.kaila@maginitiatives.com">era.kaila@maginitiatives.com</a>
                                <br><br>

                            
                        </div>
                        <div class="col-md-4">
                            <div class="service-item">
                                <img src="{{ URL::asset('images/atul.jpg') }}" class="img-responsive img-circle">
                            	</div>
                                <h4>
                                    <strong>ATUL</strong>
                                </h4>
                                <p>Co-Founder</p>
                                <p>Creative Head</p>
                                <p>Mechanical Engineer</p>
                                <p>Msc. Maths Education</p>
                                <a href="mailto:atul@maginitiatives.com">atul@maginitiatives.com</a>
                                <br><br>
                            
                        </div>
                        <div class="col-md-4">            
                            <div class="service-item">
                                <img src="{{ URL::asset('images/Psysai.jpg') }}" class="img-responsive img-circle">
                            	</div>
                                <h4>
                                    <strong>SAI</strong>
                                </h4>
                                <p>Designer</p>
                                <p>Visual Explorer</p>
                                <p>Masters in Design <br>(NID Ahmedabad)</p>
                                <a href="http://www.psysai.com">www.psysai.com</a>
                                <!--<a href="#" class="btn btn-light">Learn More</a>-->
                                <br><br>
                            
                        </div>

                    </div>
                    
           
        </div>
        <!-- /.container -->
    </div>

    <!-- Map -->
    

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                	<section class="map">
                		<iframe
						  width="100%" height="70%"
						  frameborder="0" style="border:0"
						  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDCcBd7MRtBUtxmM9UDvF6zRiwj0hEUwWI
						    &q=place_id:ChIJzVjKdJP9DDkRF7qJNZnu4fk" allowfullscreen>
						</iframe>
				        <br />
				        <small>
				            <a href="https://www.google.com/maps/embed/v1/place?key=AIzaSyDCcBd7MRtBUtxmM9UDvF6zRiwj0hEUwWI_Q&amp;q=28.6888888,77.2082234"></a>
				        </small>
				        <p>108, DREAM Building, Chhatra Marg, University of Delhi, Delhi - 110007 </p>
   
                    <br>
                    <ul class="list-inline">
                    	<li>
                            <i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:care@maginitiatives.com">care@maginitiatives.com</a>
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <li>
                            <a href="http://www.facebook.com/MG.CIC.DU"><img src="{{ URL::asset('images/Social_media_Icons-02.png') }}" width = "50%" height = "50%" class="img-responsive"></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/mag01326"><img src="{{ URL::asset('images/Social_media_Icons-03.png') }}" width = "50%" height = "50%" class="img-responsive"></a>
                        </li>
                    </ul>    
				    </section>
                </div>

                <div class="col-md-6 text-center add">
                    <h4><strong>MAG Initiatives</strong>
                    </h4>
                    <div class="row">	
				<div class="col-md-8 form">
					<form role="form" action="{{ url('/') }}" method="POST">
                	  <div class="form-group">
					    <label for="name">Name:</label>
					    <input type="text" name="name" class="form-control" placeholder="Name">
					    <p class='text-danger'></p>					  </div>
					  <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
					    <p class='text-danger'></p>					  </div>
					    <div class="form-group">
						    <label for="exampleTextarea">Message</label>
						    <textarea name="message" class="form-control" id="exampleTextarea" rows="4" placeholder="Message"></textarea>
						    <p class='text-danger'></p>						</div>
					  <input type="submit" name="submit" class="btn btn-default" >
					</form>
				</div>
				<div class="col-md-4 hidden-xs">
						<img src="{{ URL::asset('images/bot-letter.png') }}" class="img-responsive">
				</div>	
			</div>
                     
                </div>

                
            </div>
            <div class="row">
                	<div class="col-lg-12 text-center">
	                	<hr class="small">
	                    <p class="text-muted">Copyright &copy; MAG Initiatives 2016</p>
	                    <p class="text-muted">Developed by &nbsp;<a href="http://tnine.io">TNine Infotech</a></p>
                    </div>
                </div>
        </div>
    </footer>

	    <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Product 1</h4>
        </div>
	        <div class="modal-body">
		        <div class="row">
			        <div class="col-sm-6">
			          <p>Product description product description product description product description product description product description product description product description</p>
			          <p>Product description product description product description product description product description product description product description product description</p>
			        </div>
			        <div class="col-sm-6">
						      <img src="images/product1.jpg" alt="..." class="img-responsive">
			        </div>
			        
		        </div>
		        <div class="row bt">
			        <div class="col-sm-12"><a type="button" class="btn btn-lg btn-primary" href="#">BUY</a></div>
			        </div>
	        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Product 2</h4>
        </div>
	        <div class="modal-body">
		        <div class="row">
			        <div class="col-sm-6">
			          <p>Product description product description product description product description product description product description product description product description</p>
			          <p>Product description product description product description product description product description product description product description product description</p>
			        </div>
			        <div class="col-sm-6">
						      <img src="images/product2.jpg" alt="..." class="img-responsive">
			        </div>
			        
		        </div>
		        <div class="row bt">
			        <div class="col-sm-12"><a type="button" class="btn btn-lg btn-primary" href="#">BUY</a></div>
			        </div>
	        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Product 3</h4>
        </div>
	        <div class="modal-body">
		        <div class="row">
			        <div class="col-sm-6"> 
			          <p>Product description product description product description product description product description product description product description product description</p>
			          <p>Product description product description product description product description product description product description product description product description</p>
			        </div>
			        <div class="col-sm-6">
						<img src="images/product3.jpg" alt="..." class="img-responsive">
			        </div>
			        
		        </div>
		        <div class="row bt">
			        <div class="col-sm-12"><a type="button" class="btn btn-lg btn-primary" href="#">BUY</a></div>
			        </div>
	        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>


	    <script src="{{ URL::asset('js/scroll.js') }}"></script>
	    <!--<script src="js/tabs.js"></script>-->
	<script>
	    $(function() {
	        $('a[href*=#]:not([href=#])').click(function() {
	            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

	                var target = $(this.hash);
	                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	                if (target.length) {
	                    $('html,body').animate({
	                        scrollTop: target.offset().top
	                    }, 1000);
	                    return false;
	                }
	            }
	        });
	    });
	</script>







	@endsection
