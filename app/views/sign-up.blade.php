@extends ('_master')

@section('title')
	Sign Up
@stop

@section('head')
	<link href="{{ asset('css/sign-up.css') }}" rel="stylesheet">
@stop

@section('masthead')
 	<div class="jumbotron">
		<div class="container">
			<h1>T.A.L.O.S.</h1>
			<p class="lead">Tactical Algorithmic Laundry Organizing Servant</p>
		</div>
    </div>
@stop

@section('content')
	<div class="col-md-6 col-md-offset-3">
		{{ Form::open(array('url' => '/sign-up', 'method' => 'POST', 'name' => 'login', 'class' => 'form-horizontal')) }}
			<fieldset>
				<legend>Sign Up</legend>
				<div class="form-group">
					{{ Form::label('email', 'Email Address', array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-6">
						{{ Form::email('email', 'Email Address', array('class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('password', 'Password', array('class' => 'col-md-3 control-label')) }}
					<div class="col-md-6">
						{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
						{{ Form::submit('SUBMIT', array('class' => 'btn btn-primary')) }}
					</div>
				</div>
			</fieldset>
		{{ Form::close() }}
	</div>
@stop