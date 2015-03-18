<!DOCTYPE html>
<html lang="en">
@section('head')
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Brand</title>

	<link href="<% asset('/css/app.css') %>" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
@show
<body>
	
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h3>Brand</h3>
			</div>
			<div class="col-xs-6 text-right">
				<h3><a href="<% URL::to('entra')%>" class="btn btn-success"> Entra </a></h3>
			</div>
		</div>
	</div>
	<br><br>


	@yield('content')

	@section('footer')
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	@show
</body>
</html>
