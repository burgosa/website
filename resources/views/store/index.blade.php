@extends('shop')

@section('content')
<div class="container">

		@foreach($categories as $category)
		<div class="row">
			<div class="col-md-12">
				<h2> <% $category->name %> <small><a href="<% URL::to('/tienda/'.$category->slug) %>"> Ver Mas</a><small></h2>
			</div>

			
			<div class="col-sm-4 col-md-2">
			    
			      	<img class="img-responsive" src="http://placehold.it/400x400" alt="<% $category->name %>">
			      	<div class="text-center">
			        	<h5>Thumbnail label</h5>
			        	<p>999.99</p>
			        	<p><a href="#" class="btn btn-sm btn-primary" role="button">Button</a> <a href="#" class="btn btn-sm btn-default" role="button">Button</a></p>
			      </div>
			    
			 </div>

			 

		</div>
		@endforeach
	
</div>
@endsection
