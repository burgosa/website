@extends('home')

@section('content')
<div class="container">
	<div class="row">

		<?php $select_array = App\City::where('is_active',1)->lists('name','id') ?>
	
		<div class="col-md-8 col-md-offset-2 text-center">

			<h1> Bienvenido a tu supermercado </h1>
			
			<h1><small> Bienvenido a tu supermercado </small></h1>

		</div>

		<div class="col-md-4 col-md-offset-4 text-center">
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


			<form role="form" method="POST" action="<% url('/registrate') %>"  accept-charset="UTF-8">

				<input type="hidden" name="_token" value="<% csrf_token() %>">

				<div class="form-group">

					{!! Form::select('city', [0 => 'Elige tu Ciudad'] + $select_array, 0 ,['class' => 'form-control input-lg']) !!}
					
				</div>

				<button data-loading-text="Entrando..." type="submit" class="btn btn-warning btn-lg btn-block">
					Empezar a Comprar
				</button>

				<br>
				<p class="text-center text-lg"> ¿Ya tienes una cuenta? <a href="<% URL::to('entra')%>">Entra</a></p>

			</form>

			
		</div>

	</div>
</div>
@endsection
