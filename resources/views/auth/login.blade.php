@extends('home')

@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-4 col-md-offset-4 text-center">

			<h1> Bienvenido de nuevo </h1>
			<h1><small> Entra a tu cuenta </small></h1>

			<br>
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<p>
						@foreach ($errors->all() as $error)
							<% $error %>
						@endforeach
					</p>
				</div>
			@endif

			<form  role="form" method="POST" action="<% url('/auth/login') %>">

				<input type="hidden" name="_token" value="<% csrf_token() %>">
				<input type="hidden" name="remember" value="1">

				<div class="form-group">

					<input type="email" class="form-control input-lg" name="email" placeholder="Email" value="<% old('email') %>">

				</div>

				<div class="form-group">

					<input type="password" class="form-control input-lg" name="password" placeholder="Contraseña">

				</div>

				<button data-loading-text="Entrando..." type="submit" ng-click="button()" class="btn btn-warning btn-lg btn-block">
					Entrar
				</button>

				<br>
				<p class="text-center text-lg"> ¿Todavía no tienes una cuenta? <a href="/">Registrate</a></p>
				<p class="text-center text-lg"> ¿Olvidaste tu contraseña? <a href="<% url('/password/email') %>">Haz click aqui</a></p>

				
			</form>

		</div>
	</div>
</div>
@endsection
