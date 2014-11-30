@extends ('_master')

@section('title')
	Project 4
@stop

@section('head')
	<link href="{{ asset('css/index.css') }}" rel="stylesheet">
@stop

@section('masthead')
 	<div class="jumbotron">
		<div class="container">
			<h1>T.A.L.O.S.</h1>
			<p class="lead">Tactical Algorithmic Laundry Organizing Servant</p>
			<p>Fill a closet with your clothes according to their care instructions. When you're done, select the clothes you want to wash and TALOS will sort your laundry.</p>
		</div>
    </div>	
 @stop

 @section('content')
	 	<div class="col-md-6 col-md-offset-2 well">
	 		{{ Form::open(array('url' => '/login', 'method' => 'POST', 'name' => 'login', 'class' => 'form-horizontal')) }}
	 			<div class="form-group">
	 				{{ Form::label('email', 'Email Address', array('class' => 'col-md-3 control-label')) }}
			 		<div class="col-md-6">
			 			{{ Form::text('email', 'Email Address', array('class' => 'form-control')) }}
			 		</div>
		 		</div>
		 		<div class="form-group">
		 			{{ Form::label('password', 'Password', array('class' => 'col-md-3 control-label')) }}
		 			<div class="col-md-6">
		 				{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
		 			</div>
		 		</div>
		 		<div class="form-group">
		 			<div class="col-md-offset-1">
		 				{{ Form::submit('LOG IN', array('class' => 'btn btn-primary')) }}
		 				<a href="/sign-up"><div class="btn btn-warning">SIGN UP</div></a>
		 			</div>
		 		</div>
		 	{{ Form::close() }}
		</div>
 @stop