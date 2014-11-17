@extends ('_master')

@section('title')
	Project 4
@stop

@section('head')
	<link rel="stylesheet" href="css/index.css">
@stop

@section('masthead')
	<div class="jumbotron">
		<div class="container">
			<h1>T.A.L.O.S.</h1>
			<p class="lead">Tactical Algorithmic Laundry Organizing Servant</p>
		  	<div class="row">
		  		<div class="col-sm-4 col-sm-offset-2 cell">
			      <a href="/sign-up" class="lead btn btn-default btn-lg">Sign Up</a>
			     </div>
			    <div class="col-sm-4  cell">
			        <a href="/sign-in" class="lead btn btn-default btn-lg">Sign In</a>
			    </div>   
		    </div>
		</div>
    </div>	
    <div class="separator"></div>
 @stop

 @section('content')
 	<div class="container content">
 		<p>TALOS organizes your laundry into loads so you can wash and dry your clothes in the most efficient manner. Input the washing and drying instructions on the labels of your clothes and TALOS will calculate and display the most efficient loads of your laundry. Does clothes’ labels simply use symbols? Simply click on the corresponding symbols and TALOS will display the appropriate washing/drying methods.</p>

		<p>When you are done. You can save laundry loads to your user profile so you can look at them again. Or you can save all your clothes to TALOS, select the clothes you need to wash that day, and TALOS will tell you how to sort them into efficient loads. </p>
 	</div>
 @stop