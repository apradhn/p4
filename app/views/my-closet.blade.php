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
		</div>
    </div>
 	<div class="separator">
 		<div class="col-md-6 col-md-offset-2">
 			<div class="separator-text">My Closet</div>
 		</div>
 		<div class="col-md-4">
 		<a href="/item/create"><button class="btn btn-primary">ADD CLOTHES</button></a>
 		<a href="/search"><button class="btn btn-primary">SEARCH</button></a>
 		</div>
 	</div>   	
@stop

@section ('content')

	@if(isset($items))		
		{{ Form::open(array('url' => '/sort-laundry', 'method' => 'POST', 'class' => 'form-horizontal')) }}
			@foreach ($items as $item)
				<div class="well col-md-8 col-md-offset-2">

					<img class="swatch" src="{{ asset($item->color_url) }}">
					
					<div class="item">
						<span class="item-name">{{ $item->name; }}</span>	
						<br> 					
						@foreach ( $item->tags as $tag)
							<small class="tag">{{ $tag->name }}</small>
						@endforeach
					</div>

					<div class="modify-buttons">
						<a class ="btn btn-default" href="/item/{{ $item->id }}/edit">EDIT</a>
						<a class="btn btn-default" href="/tag/{{ $item->id }}/create">ADD TAGS</a>
						<span class="checkbox item-checkbox">
							<label>
								{{ Form::checkbox($item->id, $item->name) }}
							</label>
						</span>						
					</div>
				</div>
			@endforeach
			{{ Form::submit('Sort!', array('class' => 'btn btn-primary btn-raised btn-lg sort')) }}
		{{ Form::close() }}
	@endif

	@if(isset($none))
		<div class="well col-md-4 col-md-offset-4">
		<h4 class="none">{{ $none }}</h4>
		<p class="none">Click "Add Clothes" to add items to your closet</p>
		</div>
	@endif
@stop

