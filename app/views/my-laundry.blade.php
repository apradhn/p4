@extends ('_master')

@section ('title')
	My Laundry
@stop

@section ('head')
	<link rel="stylesheet" href="{{ asset('css/my-laundry.css') }}">
@stop

@section ('masthead') 
 	<div class="jumbotron">
		<div class="container">
			<h1>T.A.L.O.S.</h1>
			<p class="lead">Tactical Algorithmic Laundry Organizing Servant</p>
			<ol>
				<li>Add Clothes to Closet</li>
				<li>Select the Clothes You Want to Wash</li>
				<li>Start Laundry</li>
			</ol>
		</div>
    </div>
 	<div class="separator">
 		<div class="separator-text col-md-6 col-md-offset-1">My Laundry</div>
 	</div> 
@stop

@section ('content')
	{{ $output }}
@stop