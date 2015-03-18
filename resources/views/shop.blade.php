
<!DOCTYPE html>
<html lang="en">
@section('head')
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Brand</title>

	<link rel="stylesheet" href="<% asset('/plugins/bootstrap/css/bootstrap.min.css') %>" type='text/css'>
	<link href="<% asset('/css/app.css') %>" rel="stylesheet" type='text/css'>
	<link href="<% asset('/css/style.css') %>" rel="stylesheet" type='text/css'>

	<!-- Fonts 
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->
	<link rel="stylesheet" href="<% asset('/plugins/font-awesome/css/font-awesome.min.css') %>" type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
@show
<body>

	<nav class="navbar navbar-default navbar-fixed-top second-nav">
	  	<div class="container-fluid">
	 
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      	<ul class="nav navbar-nav">
	   
	        		<li class="dropdown">
	          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bars"></i> Categorias</a>
	          			
	          			<ul class="dropdown-menu" role="menu">

	          			@foreach($root_categories as $category)
	          	 			<li class="dropdown-submenu">
								<a tabindex="-1" href="<% URL::to('tienda/'.$category->slug) %>">  <% $category->name %> </a>
								<ul class="dropdown-menu">
									<li><a tabindex="-1" href="<% URL::to('tienda/'.$category->slug) %>"><% $category->name %></a></li>
									<li class="divider"></li>
								@foreach($category->subcategories as $subcategory)
									<li><a tabindex="-1" href="<% URL::to('tienda/'.$category->slug.'/'.$subcategory->slug) %>"><% $subcategory->name %></a></li>
								@endforeach
								</ul>
							</li>
						@endforeach

	          			</ul>
	        		</li>

	     		</ul>


	     		<div style="margin-right: 0px"class="btn-group navbar-btn navbar-right">
			  		<button type="button" class="btn btn-danger">$ 0.00</button>
			  		<button type="button" class="btn btn-warning">Checkout</button>
			  		
				</div>


	     		<ul class="nav navbar-nav navbar-right">
					
					<li class="dropdown">
		          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="caret"></span>  <i class="fa fa-shopping-cart"></i> 0</a>
		          	<ul class="dropdown-menu" role="menu">
		            	<li><a href="#">Your Items</a></li>
		            
		          	</ul>
		        	</li>
						

				</ul>

				
	 
	    	</div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/tienda">Brand</a>

			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				<ul class="nav navbar-nav">

					<li><a href="<% url('/') %>"><i class="fa fa-location-arrow"></i> <% Auth::user()->city %></a></li>
				
				</ul>

			
		        	<form class="navbar-form navbar-left" style="width:500px" role="search">
		          	<div class="input-group auto-widht">
		            	<input type="text" class="form-control" placeholder="Buscar" name="buscar">
		            	<div class="input-group-btn">
		              		<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
		            	</div>
		          	</div>
		        	</form>
		


				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="<% url('entra') %>">Entra</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hola, <% Auth::user()->first_name %> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								
								<li><a href="<% URL::to('') %>"><i class="fa fa-user"></i> Mi Cuenta</a></li>
								<li><a href="<% URL::to('/auth/logout') %>"><i class="fa fa-sign-out"></i> Salir</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	@section('footer')
	<!-- Scripts -->
	<script src="<% asset('/plugins/jquery/jquery-2.1.3.min.js') %>"></script>
	<script src="<% asset('/plugins/bootstrap/js/bootstrap.min.js') %>"></script>
	@show
</body>
</html>
