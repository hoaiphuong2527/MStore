<div class="header">
			<div class="header-grid">
				<div class="container">
					<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
						<ul>
							<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
							<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:slunusi@gmail.com">slunusi@gmail.com</a></li>
							<li><i class="glyphicon glyphicon-earphone" ></i>+8416 703 807</li>
						</ul>
					</div>
					<div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
						<div class="header-right1 ">
							<ul>
								<li><i class="glyphicon glyphicon-log-in" ></i><a href="{{ url('login') }}">Login</a></li>
								<li><i class="glyphicon glyphicon-book" ></i><a href="{{ url('register') }}">Register</a></li>
							</ul>
						</div>
						<div class="header-right2">
							<div class="cart box_1">
								<a href="{{ url('checkout') }}">
									<h3>
										<div class="total">
											<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)
										</div>
										<img src="{{ asset ('images/cart.png') }}" alt="" />
									</h3>
								</a>
								<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="container">
				<div class="logo-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header nav_2">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<div class="navbar-brand logo-nav-left ">
								<h1 class="animated wow pulse" data-wow-delay=".5s"><a href="{{ asset('/') }}">Technology<span>Style</span></a></h1>
							</div>
							
						</div>
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav">
								<li class="active"><a href="{{ asset('/') }}" class="act">Home</a></li>
								<?php
									use App\Category;
									$categoryObj = new Category();
									$categories = $categoryObj->getCategory();
								?>
								@foreach ($categories as $category)
								<li class="dropdown">
									<?php $subCategories = $category->childs; ?>
									@if(count($subCategories) == 0)
										<a href="{{ asset('category/' . $category->Id) }}">{{ $category->Name }}</a>
									@else
									<a class="dropdown-toggle" data-toggle="dropdown">{{ $category->Name }}<b class="caret"></b></a>
									<ul class="dropdown-menu multi">
										<ul class="multi-column-dropdown">
											<h6>Categories</h6>
											@foreach ($subCategories as $subCategory)
											<li><a href="{{ asset('category/' . $subCategory->Id) }}">{{ $subCategory->Name }}</a></li>
											@endforeach
										</ul>
										<div class="clearfix"></div>
									</ul>
									@endif
								</li>
								@endforeach

								<li><a href="{{ url('contact') }}">Contact Us</a></li>
								
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
    </div>