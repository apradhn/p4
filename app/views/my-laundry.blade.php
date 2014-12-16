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
		<h2>T.A.L.O.S.</h2>
		</div>
    </div>
 	<div class="separator">
 		<div class="separator-text col-md-6 col-md-offset-1">My Laundry</div>
 		<a href="/my-closet"><button class="btn btn-primary btn-raised">Back to Closet</button></a>
 	</div> 
@stop

@section ('content')

	<div class="col-md-10 col-md-offset-1">
		<div class="col-md-12 cycle-heading"><h2>Wash Cycles</h2></div>
		<div class="col-md-12">

			<div class="cycle">
			@if (isset($washData['mwNormal']))
				<h3 class="cycle-heading">Machine Wash Normal</h3>
				@foreach ($washData['mwNormal'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif
			</div>

			<div class="cycle">
			@if (isset($washData['mwCold']))
				<h3 class="cycle-heading">Machine Wash Cold</h3>
				@foreach ($washData['mwCold'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>

			<div class="cycle">
			@if (isset($washData['mwWarm']))
				<h3 class="cycle-heading">Machine Wash Warm</h3>
				@foreach ($washData['mwWarm'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif			
			</div>

			<div class="cycle">
			@if (isset($washData['mwHot']))
				<h3 class="cycle-heading">Machine Wash Hot</h3>
				@foreach ($washData['mwHot'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif
			</div>

			<div class="cycle">
			@if (isset($washData['mwColdPerm']))
				<h3 class="cycle-heading">Machine Wash Cold Permanent Press</h3>
				@foreach ($washData['mwColdPerm'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>

			<div class="cycle">
			@if (isset($washData['mwWarmPerm']))
				<h3 class="cycle-heading">Machine Wash Warm Permanent Press</h3>
				@foreach ($washData['mwWarmPerm'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>

			<div class="cycle">
			@if (isset($washData['mwHotPerm']))
				<h3 class="cycle-heading">Machine Wash Hot Permanent Press</h3>
				@foreach ($washData['mwHotPerm'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>
		</div>

		<div class="col-md-12 cycle-heading"><h2>Wash Cycles</h2></div>

			<div class="cycle">
			@if (isset($dryData['tdNormal']))
				<h3 class="cycle-heading">Tumble Dry, Normal</h3>
				@foreach ($dryData['tdNormal'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>

			<div class="cycle">
			@if (isset($dryData['tdNoHeat']))
				<h3 class="cycle-heading">Tumble Dry, No Heat</h3>
				@foreach ($dryData['tdNoHeat'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>

			<div class="cycle">
			@if (isset($dryData['tdLowHeat']))
				<h3 class="cycle-heading">Tumble Dry, Low Heat</h3>
				@foreach ($dryData['tdLowHeat'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>

			<div class="cycle">
			@if (isset($dryData['tdMedium']))
				<h3 class="cycle-heading">Tumble Dry, Medium Heat</h3>
				@foreach ($dryData['tdMedium'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif		
			</div>

			<div class="cycle">
			@if (isset($dryData['tdHigh']))
				<h3 class="cycle-heading">Tumble Dry, High Heat</h3>
				@foreach ($dryData['tdHigh'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>			

			<div class="cycle">
			@if (isset($dryData['tdNoHeatPerm']))
				<h3 class="cycle-heading">Tumble Dry, No Heat, Permanent Press</h3>
				@foreach ($dryData['tdNoHeatPerm'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>

			<div class="cycle">
			@if (isset($dryData['tdLowHeatPerm']))
				<h3 class="cycle-heading">Tumble Dry, Low Heat, Permanent Press</h3>
				@foreach ($dryData['tdLowHeatPerm'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>

			<div class="cycle">
			@if (isset($dryData['tdMediumPerm']))
				<h3 class="cycle-heading">Tumble Dry, Medium Heat, Permanent Press</h3>
				@foreach ($dryData['tdMediumPerm'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>	

			<div class="cycle">
			@if (isset($dryData['tdNoHeatGentle']))
				<h3 class="cycle-heading">Tumble Dry, No Heat, Gentle</h3>
				@foreach ($dryData['tdNoHeatGentle'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif
			</div>

			<div class="cycle">
			@if (isset($dryData['tdLowHeatGentle']))
				<h3 class="cycle-heading">Tumble Dry, Low Heat, Gentle</h3>
				@foreach ($dryData['tdLowHeatGentle'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>	

			<div class="cycle">
			@if (isset($dryData['tdMediumGentle']))
				<h3 class="cycle-heading">Tumble Dry, Medium Heat, Gentle</h3>
				@foreach ($dryData['tdMediumGentle'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif
			</div>

			<div class="cycle">
			@if (isset($dryData['lineDry']))
				<h3 class="cycle-heading">Line Dry</h3>
				@foreach ($dryData['lineDry'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif
			</div>

			<div class="cycle">
			@if (isset($dryData['dripDry']))
				<h3 class="cycle-heading">Drip Dry</h3>
				@foreach ($dryData['dripDry'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>

			<div class="cycle">
			@if (isset($dryData['dryFlat']))
				<h3 class="cycle-heading">Dry Flat</h3>
				@foreach ($dryData['dryFlat'] as $value)
					<div class="well">
					{{ $value }}
					</div>
				@endforeach
			@endif	
			</div>																																	
		</div>
	</div>
@stop