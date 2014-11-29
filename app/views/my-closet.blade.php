@extends ('_master') 

@section ('title')
	My Closet
@stop

@section ('masthead')
 	<div class="jumbotron">
		<div class="container">
			<h1>T.A.L.O.S.</h1>
			<p>
				<ol>
					<li>Add Clothes to Closet</li>
					<li>Select the Clothes You Want to Wash</li>
					<li>Start Laundry</li>
				</ol>
			</p>
		</div>
    </div>
 	<div class="separator">
 		<div class="separator-text col-md-6 col-md-offset-1">My Closet</div>
 		<a href="/add-clothes"><button class="btn btn-danger btn-raised">ADD CLOTHES</button></a>
 		<a href="/start-laundry"><button class="btn btn-success btn-raised">START LAUNDRY</button></a>
 	</div>   	
@stop

@section ('content')

@stop