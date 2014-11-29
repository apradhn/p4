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
 	<div class="row">
	 	<div class="col-sm-6 col-sm-offset-2 col-md-6 col-md-offset-2 col-lg-6 col-lg-offset-2">
	 		{{ Form::open(array('url' => '/login', 'method' => 'POST', 'name' => 'login', 'class' => 'form-horizontal')) }}
	 			<div class="form-group">
			 		<div class="col-sm-6 col-md-6  col-lg-6">
			 			{{ Form::text('email', 'Email Address', array('class' => 'form-control')) }}
			 		</div>
		 		</div>
		 		<div class="form-group">
		 			<div class="col-sm-6 col-md-6  col-lg-6">
		 				{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
		 			</div>
		 		</div>
		 		<div class="form-group">
		 			<div class="col-sm-10 col-md-10 col-lg-10">
		 				{{ Form::submit('LOG IN', array('class' => 'btn btn-primary')) }}
		 				<button class="btn btn-default">SIGN UP</button>
		 			</div>
		 		</div>
		 	{{ Form::close() }}
		</div>
	</div>
	<div class="row">
        <h1>You can add your site here.</h1>

        <h2>To ensure that material-design theme is working, check out the buttons below.</h2>

        <h3 class="text-muted">If you can see the ripple effect on clicking them, then you are good to go!</h3>


        <p class="bs-component">
            <a href="javascript:void(0)" class="btn btn-default">Default</a>
            <a href="javascript:void(0)" class="btn btn-primary">Primary</a>
            <a href="javascript:void(0)" class="btn btn-success">Success</a>
            <a href="javascript:void(0)" class="btn btn-info">Info</a>
            <a href="javascript:void(0)" class="btn btn-warning">Warning</a>
            <a href="javascript:void(0)" class="btn btn-danger">Danger</a>
            <a href="javascript:void(0)" class="btn btn-link">Link</a>
        </p>
    </div>
 @stop