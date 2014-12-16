@extends ('_master')

@section('title')
	Project 4
@stop

@section('head')
	<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@stop

@section('masthead')
 	<div class="jumbotron">
		<div class="container">
			<h1>T.A.L.O.S.</h1>
			<h2>Tactical Algorithmic Laundry Organizing Servant</h2>
			<p class="lead">Upload your clothes with the care instructions on the label, and TALOS <br>will tell you 
			how to wash and dry the clothes you want to wash.</p>
		</div>
    </div>	
 @stop

 @section('content')
	 	<div class="col-md-6 col-md-offset-2 well">
	 		{{ Form::open(array('url' => '/login', 'method' => 'POST', 'name' => 'login', 'class' => 'form-horizontal')) }}
	 			<div class="form-group">
	 				{{ Form::label('email', 'Email Address', array('class' => 'col-md-3 control-label')) }}
			 		<div class="col-md-6">
			 			{{ Form::email('email', '', array('placeholder' => 'Email Address', 'class' => 'form-control')) }}
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
		 				<a href="/signup"><div class="btn btn-warning">SIGN UP</div></a>
		 			</div>
		 		</div>
		 	{{ Form::close() }}
		</div>
 @stop