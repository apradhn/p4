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
<!-- WASH CYCLES --> 
	<div class="row">
		<div class="col-md-offset-1 cycle-heading">
			<h2>Wash Cycles</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			@if (isset($washData['mwNormal']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Machine Wash Normal</div>
						@foreach ($washData['mwNormal'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif


			@if (isset($washData['mwCold']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
					<div class="panel-heading">Machine Wash Cold</div>
						@foreach ($washData['mwCold'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}" class="swatch">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	
			
			@if (isset($washData['mwWarm']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
					<div class="panel-heading">Machine Wash Warm</div>
						@foreach ($washData['mwWarm'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

			@if (isset($washData['mwHot']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
					<div class="panel-heading">Machine Wash Hot</div>
						@foreach ($washData['mwHot'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif

			@if (isset($washData['mwColdPerm']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
					<div class="panel-heading">Machine Wash Cold Permanent Press</div>
						@foreach ($washData['mwColdPerm'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

			@if (isset($washData['mwWarmPerm']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
					<div class="panel-heading">Machine Wash Warm Permanent Press</div>
						@foreach ($washData['mwWarmPerm'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

			@if (isset($washData['mwHotPerm']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
					<div class="panel-heading">Machine Wash Hot Permanent Press</div>
						@foreach ($washData['mwHotPerm'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

		</div>
	</div>
<!-- DRY CYCLES --> 
	<div class="row">
		<div class="col-md-offset-1 cycle-heading">
			<h2>Dry Cycles</h2>
		</div>

		<div class="col-md-10 col-md-offset-1">
			@if (isset($dryData['tdNormal']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, Normal</div>
						@foreach ($dryData['tdNormal'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

			@if (isset($dryData['tdNoHeat']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, No Heat</div>
						@foreach ($dryData['tdNoHeat'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

			@if (isset($dryData['tdLowHeat']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, Low Heat</div>
						@foreach ($dryData['tdLowHeat'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

			@if (isset($dryData['tdMedium']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, Medium Heat</div>
						@foreach ($dryData['tdMedium'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif		

			@if (isset($dryData['tdHigh']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, High Heat</div>
						@foreach ($dryData['tdHigh'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>			
				</div>
			@endif	

			@if (isset($dryData['tdNoHeatPerm']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, No Heat, Permanent Press</div>
						@foreach ($dryData['tdNoHeatPerm'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

			@if (isset($dryData['tdLowHeatPerm']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, Low Heat, Permanent Press</div>
						@foreach ($dryData['tdLowHeatPerm'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

			@if (isset($dryData['tdMediumPerm']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, Medium Heat, Permanent Press</div>
						@foreach ($dryData['tdMediumPerm'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

			@if (isset($dryData['tdNoHeatGentle']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, No Heat, Gentle</div>
						@foreach ($dryData['tdNoHeatGentle'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif

			@if (isset($dryData['tdLowHeatGentle']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, Low Heat, Gentle</div>
						@foreach ($dryData['tdLowHeatGentle'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>	
				</div>
			@endif	

			@if (isset($dryData['tdMediumGentle']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Tumble Dry, Medium Heat, Gentle</div>
						@foreach ($dryData['tdMediumGentle'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif

			@if (isset($dryData['lineDry']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Line Dry</div>
						@foreach ($dryData['lineDry'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif

			@if (isset($dryData['dripDry']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Drip Dry</div>
						@foreach ($dryData['dripDry'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

			@if (isset($dryData['dryFlat']))
				<div class="col-md-4">
					<div class="panel panel-primary list-group">
						<div class="panel-heading">Dry Flat</div>
						@foreach ($dryData['dryFlat'] as $value)
							<div class="list-group-item">
								<div class="row-picture">
									<img src="{{ Item::find($value)->color_url }}">
								</div>
								<div class="row-content">
									<div class="list-group-item-text">{{ Item::find($value)->name }}</div>
								</div>
							</div>
							<div class="list-group-separator"></div>
						@endforeach
					</div>
				</div>
			@endif	

	 	</div>
 	</div>
@stop