@extends('shop')

@section('content')
<div class="container">

		@foreach($categories as $category)
		<div class="row">
			<div class="col-md-12">
				<h2> <% $category->name %> <small><a href="<% URL::to('/tienda/'.$category->slug) %>"> Ver Mas</a><small></h2>
			</div>

			<?php $i = 0; while( $i < 6 ){ ?>
			<div class="col-sm-4 col-md-2">
			    <div class="thumbnail">
			      	<img src="http://placehold.it/200x200" alt="<% $category->name %>">
			      	<div class="caption">
			        	<h5>Thumbnail label</h5>
			        	<p>999.99</p>
			        	<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
			 </div>

			 <?$i++; } ?>

		</div>
		@endforeach
	
</div>
@endsection
