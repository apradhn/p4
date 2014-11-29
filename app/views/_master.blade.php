<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'p4')</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified Bootstrap CSS --> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    	<!-- Latest compiled and minified Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>	
		<!-- JQuery --> 
		<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    	<!-- Material Design Bootstrap --> 
    	<link href="css/ripples.min.css" rel="stylesheet">
        <link href="css/material-wfont.min.css" rel="stylesheet">
        <script src="js/ripples.min.js"></script>
        <script src="js/material.min.js"></script>
        <link href="{{ asset('css/starter-template.css') }}" rel="stylesheet">
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
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>	

	    @yield('masthead')

  		<div class="starter-template">
  			@yield('content')
      	</div>
	    <!-- Bootstrap core Javascript -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>   	    	
	</body>
</html>