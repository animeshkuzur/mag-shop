<div class="top-menu navbar navbar-default">
						<div class="container">		
							<a href="{{ url('/') }}"><img src="{{ URL::asset('images/MAG.png') }}" class="navbar-brand" alt="MAG"></a>

							<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<div class="collapse navbar-collapse navHeaderCollapse">

								<ul class="nav navbar-nav navbar-right">
									<li><a href="#product" class="btn btn-lg">PRODUCTS</a></li>
									<li><a href="#userspace" class="btn btn-lg">WALL</a></li>
									<li><a href="#why" class="btn btn-lg ">WHY?</a></li>
									<li><a href="{{ url('/blog') }}" class="btn btn-lg">BLOG</a></li>
									<li><a href="#team" class="btn btn-lg">TEAM</a></li>
									<li><a href="#contact" class="btn btn-lg ">CONTACT</a></li>
									<li><a class="btn btn-lg" data-toggle="modal" data-target="#cart" id="mycart"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;CART&nbsp;&nbsp;<span id="procount2">{{ $items }}</span></a></li>
								</ul>
							</div>
						</div>				
					</div>