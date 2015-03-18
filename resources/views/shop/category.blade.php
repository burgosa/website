@extends('shop')

@section('content')
<div class="container">




		@foreach($categories as $category)
		<div class="row">

			<div class="col-md-12">
				<ol class="breadcrumb">
				  	<li><a href="<% URL::to('/tienda') %>">Tienda</a></li>
				  	<li><% $category->name %></li>
				  	
				</ol>
			</div>
		
			
			@foreach($category->subcategories as $subcat)

				<div class="col-md-12">
					<h3> <% $subcat->name %> <small><a href="<% URL::to('/tienda/'.$category->slug.'/'.$subcat->slug) %>"> Ver Mas</a></small></h3>
				</div>

				@foreach($subcat->products as $product)
				
					<div class="col-sm-4 col-md-2">
			    
					    <img class="img-responsive" src="http://placehold.it/400x400" alt="<% $product->name %>">

					    <div class="text-center">
				        	<h5><% $product->name %></h5>
				        	<p><% $product->price %></p>
				        	<p>
				        		<a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal" role="button">Button</a>
				        		<a href="#" class="btn btn-sm btn-default" role="button">Button</a>
				        	</p>
					    </div>
					    
					</div>

				@endforeach

				<hr>

			@endforeach

		</div>
		@endforeach
	
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
   		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Product Detailed Page</h4>
      		</div>
	      	<div class="modal-body">
	        	...
		    </div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	<button type="button" class="btn btn-primary">Add to cart</button>
	      	</div>
    	</div>
  	</div>
</div>


@endsection
