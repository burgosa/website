@extends('home')

@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-12 text-center">
			
			<h1> Crea tu cuenta </h1>
			<h1><small>Compra en <% $city_name %></small></h1>

		</div>

		<div class="col-md-4 col-md-offset-4 text-center">

			@if (count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
						<p><% $error %></p>
					@endforeach		
				</div>
			@endif
			<br>
			<form method="POST" action="<% URL::to('/auth/register') %>">
				
				<input type="hidden" name="_token" value="<% csrf_token() %>">

				<input type="hidden" name="city" value="<% $city_name %>">

				<div class="form-group">
				
					<input type="text" class="form-control input-lg" placeholder="Nombre" name="first_name" value="<% old('first_name') %>">

				</div>

				<div class="form-group">
					
					<input type="text" class="form-control input-lg" placeholder="Apellido" name="last_name" value="<% old('last_name') %>">

				</div>

				<div class="form-group">

					<input type="email" class="form-control input-lg" placeholder="Email" name="email" value="<% old('email') %>">

				</div>

				<div class="form-group">

					<input type="password" class="form-control input-lg" placeholder="Contraseña" name="password">

				</div>

				<button type="submit" class="btn btn-warning btn-lg btn-block">
					Entrar
				</button>

				<br>
				<p class="text-center text-lg"> ¿Ya tienes una cuenta? <a href="/entra">Entra</a></p>
						
			</form>

		</div>

	</div>
</div>
@endsection
