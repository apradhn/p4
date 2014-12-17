@extends ('_master') 

@section ('title')
	Add Tags
@stop

@section ('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/add-tags.css') }}">
@stop

@section ('masthead')
 	<div class="jumbotron">
		<div class="container">
		<h2>T.A.L.O.S.</h2>
		</div>
    </div>
 	<div class="separator">
 		<div class="separator-text col-md-6 col-md-offset-1">Add Tags</div>
 		<a href="/my-closet"><button class="btn btn-primary btn-raised">Back to Closet</button></a>
 	</div>   	
@stop

@section ('content') 
	<div class="col-md-8 col-md-offset-2 well">
		{{ Form::open(array('action' => ['TagController@store', $item->id], 'method' => 'POST', 'name' => 'Add Tags', 'class' => 'form-horizontal')) }}
			<fieldset>
				<legend>New Tag for {{ $item->name }}</legend>
				<div class="form-group">
					{{ Form::label('name', 'Name', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-4">
						{{ Form::text('name', '', array('class' => 'form-control', 'placholder' => 'Name')) }}
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2">
						{{ Form::submit('SUBMIT', array('class' => 'btn btn-primary')) }}
					</div>
				</div>
			</fieldset>
		{{ Form::close() }}
	</div>
@stop