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
 		<div class="separator-text col-md-6 col-md-offset-1">My Closet</div>
 		<a href="/item/create"><button class="btn btn-primary btn-raised">ADD CLOTHES</button></a>
 		<a href="/start-laundry"><button class="btn btn-primary btn-raised">START LAUNDRY</button></a>
 	</div>   	
@stop

@section ('content')
	@if(isset($items))
		@foreach ($items as $item)
			<div class="well col-md-8 col-md-offset-2">
				<img class="swatch" src="{{ asset($item->color_url) }}">
				<span class="item-name">{{ $item->name; }}</span>
				<div class="modify-buttons">
					<a class ="btn btn-link" href="/item/{{ $item->id }}/edit">EDIT</a>
					<div class="delete">
						{{ Form::open(['method' => 'DELETE', 'action' => ['ItemController@destroy', $item->id]])}}
							{{ Form::submit('DELETE', array('class' => 'btn btn-danger')) }}	
						{{ Form::close() }}
					</div>
				</div>
			</div>
		@endforeach
	@endif

	@if(isset($none))
		<div class="well col-md-8 col-md-offset-2">{{ $none }}</div>
	@endif
@stop
