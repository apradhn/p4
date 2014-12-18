@extends ('_master') 

@section ('title')
	Search
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/my-closet.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">	
@stop

@section ('masthead')
 	<div class="jumbotron">
		<div class="container">
		<h2>T.A.L.O.S.</h2>
		<p></p>
		</div>
    </div>
 	<div class="separator">
 		<div class="col-md-6 col-md-offset-2"><div class="separator-text">Search</div></div>
 		<div class="col-md-4">
 			<a href="/my-closet"><button class="btn btn-primary btn-raised">MY CLOSET</button></a>
 		</div>
 	</div>   	
@stop

@section ('content')

	<div class="form-horizontal col-md-6 col-md-offset-2">
		<div class="form-group">
			<label for="query" class="col-md-4 control-label">Search for an item by name, tag, or color</label>
			<div class="col-md-8">
				<input type="text" placeholder="Search..." id="query" name="query" value="" class="form-control">
				{{ Form::token() }} 
			</div>
		</div>

	<div class="btn-group btn-group-justified">
	    <a id="search-name" href="javascript:void(0)" class="btn btn-default">Name</a>
	    <a id="search-tag" href="javascript:void(0)" class="btn btn-default">Tags</a>
	    <a id="search-color" href="javascript:void(0)" class="btn btn-default">Color</a>
	</div>
	
	</div>
	


	<div id="results"></div>
@stop

@section ('footer') 
	<script src="{{ asset('/js/search.js') }}"></script>
@stop
