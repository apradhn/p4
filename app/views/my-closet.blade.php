@extends ('_master') 

@section ('title')
	My Closet
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
 		<a href="/item/create"><button class="btn btn-danger btn-raised">ADD CLOTHES</button></a>
 		<a href="/start-laundry"><button class="btn btn-success btn-raised">START LAUNDRY</button></a>
 	</div>   	
@stop

@section ('content')
	@if(isset($items))
		@foreach ($items as $item)
			<div class="well col-md-8 col-md-offset-2">
				<img src="{{ asset($item->color_url) }}">
				{{ $item->name; }}
				<a href="/item/{{ $item->id }}/edit">edit</a>
				{{ Form::open(['method' => 'DELETE', 'action' => ['ItemController@destroy', $item->id]])}}
					{{ Form::submit('DELETE', array('class' => 'btn btn-danger')) }}	
				{{ Form::close() }}
			</div>
		@endforeach
	@endif

	@if(isset($none))
		<div class="well col-md-8 col-md-offset-2">{{ $none }}</div>
	@endif
@stop
