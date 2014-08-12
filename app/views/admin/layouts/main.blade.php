<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    	<title>@yield('title')</title>
	    {{ HTML::style('assets/css/bootstrap.css') }}
  	</head>
  	<body>
  		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  	<div class="container">
		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
		          <ul class="nav navbar-nav">
		            <li class="active">{{ HTML::linkRoute('admin.dashboard', 'Home') }}</li>
		            <li>{{ HTML::linkRoute('profile', 'Profile') }}</li>
		            <li>{{ HTML::linkRoute('category.list', 'Category') }}</li>
		            <li>{{ HTML::linkRoute('users.logout', 'Logout') }}</li>
		          </ul>
		        </div>
		  	</div>
		</nav>

	    <div class="container" style="margin-top: 50px;">
		    <div class="row">
	  			<div class="col-md-3" id="leftCol">
					<div class="well"> 
		              	<!-- <ul class="nav nav-stacked" id="sidebar">
		                  <li><a href="#sec1">Section 1</a></li>
		                  <li><a href="#sec2">Section 2</a></li>
		                  <li><a href="#sec3">Section 3</a></li>
		                  <li><a href="#sec4">Section 4</a></li>
		              	</ul> -->
		              	@section('sidebar')
				            This is the master sidebar.
				        @show
	  				</div>
	      		</div>  
	      		<div class="col-md-9">
	      			@if(Session::has('message'))
			            <p class="alert">{{ Session::get('message') }}</p>
			        @endif

	              	@yield('content')
	      		</div>
  			</div>
	    </div>

	    <style type="text/css">
	    	.container h2 {font-family: myriad pro; font-size: 20px;}
	    	.container #content {width: 100%;}
	    	.container #content ul{list-style: none; margin: 0px; padding: 0px;}
	    	.container #content ul li{margin-bottom: 15px;}
	    	.container #content hr{margin-top: 10px;}
	    </style>
  	</body>
</html>
