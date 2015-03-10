@extends('app')

@section('content')
<div class="container">
	<div class="row">
	
		<div class="col-md-8 col-md-offset-2 text-center">

			<h1> Hola </h1>
			<br>
			<h1><small> Bienvenido a tu supermercado </small></h1>

		</div>

		<div class="col-md-4 col-md-offset-4 text-center">

			<form role="form" method="POST" action="" accept-charset="UTF-8">
				
				<input type="hidden" name="_token" value="<% csrf_token() %>">

				<div class="form-group">
					{!! Form::select('category_id', [0 => 'Please Select One'] , 0 , ['class' => 'form-control input-lg']) !!}
					
				</div>

				<button  ng-show="data.city.value == 1 || data.city.value == 2" data-loading-text="Entrando..." type="submit" ng-click="button()" class="btn btn-warning btn-lg btn-block">
					Empezar a Comprar
				</button>

				<br>
				<p class="text-center text-lg"> ¿Ya tienes una cuenta? <a href="<% URL::to('auth/login')%>">Entra</a></p>

			</form>

			
		</div>

	</div>
</div>
@endsection
