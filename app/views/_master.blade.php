<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'p4')</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified Bootstrap CSS --> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    	<!-- Material Design Bootstrap --> 
    	<link href="{{ asset('css/ripples.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/material-wfont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/starter-template.css') }}" rel="stylesheet">
        <link href="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">
    	@yield('head')

	</head>
	<body>
	    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="http://p1.apradhan.me">Abhijit Pradhan</a>
	        </div>
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="http://p1.apradhan.me">p1</a></li>
	            <li><a href="http://p2.apradhan.me">p2</a></li>
	            <li><a href="http://p3.apradhan.me">p3</a></li>
	            <li class="active"><a href="/">p4</a></li>
				@if(Auth::check())
				    <li><a href='/logout'>Log out {{ Auth::user()->name; }}</a></li>
				@endif	            
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>	

	    @yield('masthead')

	    @if(Session::has('flash_notification.success'))
		    <div class="row">
		        <div class='alert alert-dismissable alert-{{ Session::get('flash_notification.level') }} col-md-8 col-md-offset-2'>
		        <button type="button" class="close" data-dismiss="alert">x</button>
		        <span class="flash">{{ Session::get('flash_notification.success') }}</span>
		        </div>
		    </div>
	    @endif

	    @if(Session::has('flash_notification.message'))
		    <div class="row">
		        <div class='alert alert-dismissable alert-{{ Session::get('flash_notification.level') }} col-md-8 col-md-offset-2'>
		        <button type="button" class="close" data-dismiss="alert">x</button>
		        <span class="flash">{{ Session::get('flash_notification.message') }}</span>
		        </div>
		    </div>
	    @endif

	    @if(Session::has('flash_notification.warning'))
		    <div class="row">
		        <div class='alert alert-dismissable alert-{{ Session::get('flash_notification.level') }} col-md-8 col-md-offset-2'>
		        <button type="button" class="close" data-dismiss="alert">x</button>
		        <span class="flash">{{ Session::get('flash_notification.warning') }}</span>
		        </div>
		    </div>
	    @endif


  		<div class="starter-template">
  			@yield('content')
      	</div>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>   
        <script src="{{ asset('js/ripples.min.js') }}"></script>
        <script src="{{ asset('js/material.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $.material.init();
            });
        </script> 
        @yield('footer')  	    	
	</body>
</html>