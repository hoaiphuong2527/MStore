<!--Header-part-->
	<div id="header">
		<h1><a href="dashboard.html">Quản lý </a></h1>
	</div>
	<!--close-Header-part--> 

	<!--top-Header-menu-->
	<div id="user-nav" class="navbar navbar-inverse">
		<ul class="nav">
			<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Super Admin</span><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
					<li class="divider"></li>
					<li><a href="{{ url('logout') }}"><i class="icon-key"></i> Log Out</a></li>
				</ul>
			</li>
			<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">1</span> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
					<li class="divider"></li>
					<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
					<li class="divider"></li>
					<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
					<li class="divider"></li>
					<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
				</ul>
			</li>
			<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
			<li class=""><a title="" href="{{ url('/admin/logout') }}"><i class="icon icon-share-alt"></i> <span class="text">Log out</span></a></li>
		</ul>
	</div>

	<!--start-top-serch-->
	<div id="search">
		<input type="text" placeholder="Search here..."/>
		<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
	</div>
	<!--close-top-serch--> 

	<!--sidebar-menu-->

	<div id="sidebar"> <a href="" class="visible-phone"><i class="icon icon-th"></i>Naviagtion</a>
		<ul>
			<li><a href="{{ asset ('/admin') }}"><i class="icon icon-home"></i> <span>Admin Panel</span></a> </li>
			<li> <a href="{{ asset('/admin/category') }}"><i class="icon icon-th-list"></i> <span>Categories</span></a></li>
			<li> <a href="{{ asset('/admin/product') }}"><i class="icon icon-th-list"></i> <span>Products</span></a></li>
			<li> <a href="{{ asset('/admin/feedback') }}"><i class="icon icon-th-list"></i> <span>Feedbacks</span></a></li>
		</ul>
	</div>