@extends ('_master')

@section ('title')
	My Laundry
@stop

@section ('head')
	<link rel="stylesheet" href="{{ asset('css/my-laundry.css') }}">
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
 		<div class="separator-text col-md-6 col-md-offset-1">My Laundry</div>
 	</div> 
@stop

@section ('content')

	<div class="well col-md-10 col-md-offset-1">
		<div class="col-md-6">
			<h2>Wash Loads</h2>
			@if (isset($washData['mwNormal']))
				<h3>Machine Wash Normal</h3>
				@foreach ($washData['mwNormal'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif

			@if (isset($washData['mwCold']))
				<h3>Machine Wash Cold</h3>
				@foreach ($washData['mwCold'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif	

			@if (isset($washData['mwWarm']))
				<h3>Machine Wash Warm</h3>
				@foreach ($washData['mwWarm'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif			

			@if (isset($washData['mwHot']))
				<h3>Machine Wash Hot</h3>
				@foreach ($washData['mwHot'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif

			@if (isset($washData['mwColdPerm']))
				<h3>Machine Wash Cold Permanent Press</h3>
				@foreach ($washData['mwColdPerm'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif	
			
			@if (isset($washData['mwWarmPerm']))
				<h3>Machine Wash Warm Permanent Press</h3>
				@foreach ($washData['mwWarmPerm'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif	

			@if (isset($washData['mwHotPerm']))
				<h3>Machine Wash Hot Permanent Press</h3>
				@foreach ($washData['mwHotPerm'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif	
		</div>
		<div class="col-md-6">
			<h2>Dry Loads</h2>
			@if (isset($dryData['tdNormal']))
				<h3>Tumble Dry, Normal</h3>
				@foreach ($dryData['tdNormal'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif	

			@if (isset($dryData['tdNoHeat']))
				<h3>Tumble Dry, No Heat</h3>
				@foreach ($dryData['tdNoHeat'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif	

			@if (isset($dryData['tdLowHeat']))
				<h3>Tumble Dry, Low Heat</h3>
				@foreach ($dryData['tdLowHeat'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif	

			@if (isset($dryData['tdMedium']))
				<h3>Tumble Dry, Medium Heat</h3>
				@foreach ($dryData['tdMedium'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif		

			@if (isset($dryData['tdHigh']))
				<h3>Tumble Dry, High Heat</h3>
				@foreach ($dryData['tdHigh'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif				

			@if (isset($dryData['tdNoHeatPerm']))
				<h3>Tumble Dry, No Heat, Permanent Press</h3>
				@foreach ($dryData['tdNoHeatPerm'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif	

			@if (isset($dryData['tdLowHeatPerm']))
				<h3>Tumble Dry, Low Heat, Permanent Press</h3>
				@foreach ($dryData['tdLowHeatPerm'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif	

			@if (isset($dryData['tdMediumPerm']))
				<h3>Tumble Dry, Medium Heat, Permanent Press</h3>
				@foreach ($dryData['tdMediumPerm'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif		

			@if (isset($dryData['tdNoHeatGentle']))
				<h3>Tumble Dry, No Heat, Gentle</h3>
				@foreach ($dryData['tdNoHeatGentle'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif

			@if (isset($dryData['tdLowHeatGentle']))
				<h3>Tumble Dry, Low Heat, Gentle</h3>
				@foreach ($dryData['tdLowHeatGentle'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif		

			@if (isset($dryData['tdMediumGentle']))
				<h3>Tumble Dry, Medium Heat, Gentle</h3>
				@foreach ($dryData['tdMediumGentle'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif

			@if (isset($dryData['lineDry']))
				<h3>Line Dry</h3>
				@foreach ($dryData['lineDry'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif		

			@if (isset($dryData['dripDry']))
				<h3>Drip Dry</h3>
				@foreach ($dryData['dripDry'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif	

			@if (isset($dryData['dryFlat']))
				<h3>Dry Flat</h3>
				@foreach ($dryData['dryFlat'] as $value)
					{{ $value }}<br>
				@endforeach
			@endif																																		
		</div>
	</div>
@stop