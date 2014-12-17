@extends ('_master') 

@section ('title')
	My Closet
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/my-closet.css') }}">
@stop

@section ('masthead')
 	<div class="jumbotron">
		<div class="container">
		<h2>T.A.L.O.S.</h2>
		<p></p>
		</div>
    </div>
 	<div class="separator">
 		<div class="col-md-6 col-md-offset-2"><div class="separator-text">My Closet</div></div>
 		<div class="col-md-4">
 		<a href="/item/create"><button class="btn btn-primary btn-raised">ADD CLOTHES</button></a>
 		</div>
 	</div>   	
@stop

@section ('content')
<!-- 
	<label for="query">Search:</label>
	<input type="text" id="query" value="item"><br><br>

	{{ Form::token() }} 

	<button id="search-json">Search and get JSON back</button><br><br>
	<button id="search-html">Search and get HTML back</button>
	<div id="results"></div>
--> 

	@if(isset($items))
		{{ Form::open(array('url' => '/sort-laundry', 'method' => 'POST', 'class' => 'form-horizontal')) }}
			@foreach ($items as $item)
				<div class="well col-md-8 col-md-offset-2">
					<img class="swatch" src="{{ asset($item->color_url) }}">
					<span class="item-name">{{ $item->name; }}</span>
					<div class="modify-buttons">
							<span class="checkbox item-checkbox">
								<label>
									{{ Form::checkbox($item->id, $item->name) }}
								</label>
							</span>
						<a class ="btn btn-link" href="/item/{{ $item->id }}/edit">EDIT</a>
						<!-- 
						<div class="delete">
							{{ Form::open(['method' => 'DELETE', 'action' => ['ItemController@destroy', $item->id]])}}
								{{ Form::submit('DELETE', array('class' => 'btn btn-danger')) }}	
							{{ Form::close() }}
						</div>
						-->
					</div>
				</div>
			@endforeach
			{{ Form::submit('Sort!', array('class' => 'btn btn-primary btn-raised btn-lg sort')) }}
		{{ Form::close() }}
	@endif

	@if(isset($none))
		<div class="well col-md-8 col-md-offset-2">{{ $none }}</div>
	@endif
@stop

@section ('footer') 
	<script src="/js/search.js"></script>
@stop
