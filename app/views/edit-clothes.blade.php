@extends ('_master')

@section ('title')
	Editing {{$item->name}}
@stop

@section ('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/add-clothes.css') }}">
@stop

@section ('masthead')
 	<div class="jumbotron">
		<div class="container">
		<h2>T.A.L.O.S.</h2>
		<div class="back">
			<a href="/my-closet"><i class="mdi-navigation-arrow-back"></i> My Closet</a>
		</div>
		</div>
    </div>
 	<div class="separator">
 		<div class="col-md-6 col-md-offset-2"><div class="separator-text">Edit Clothes</div></div>
 		<div class="col-md-4">
			<div class="delete">
				{{ Form::open(['method' => 'DELETE', 'action' => ['ItemController@destroy', $item->id]])}}
					{{ Form::submit('DELETE', array('class' => 'btn btn-danger')) }}	
				{{ Form::close() }}
			</div> 			
 		</div>
 	</div>
@stop

@section('content')
	<div class="col-md-8 col-md-offset-2 well">
		{{ Form::model($item, ['method' => 'put', 'action' => ['ItemController@update', $item->id], 'class' => 'form-horizontal']) }}
			<fieldset>
				<legend>Update {{ $item->name }}</legend>
				<div class="form-group">
					{{ Form::label('name', 'Name', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-4">
						{{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => $item->name)) }}
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('washingInstructions', 'Washing Instructions', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-8">
						<div class="radio radio-primary">	
							<label>
								{{ Form::radio('wash', 'mwNormal') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Normal
							</label>
							<img src="{{ asset('images/mwNORMAL.jpg') }}" class="laundry-symbol">								
						</div>					
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwCold') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Cold
							</label>
							<div class="laundry-symbol">
								<img src="{{ asset('images/mwCOLD.jpg') }}">
								<img src="{{ asset('images/mw30c.jpg') }}">
							</div>								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwWarm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Warm
							</label>
							<div class="laundry-symbol">
								<img src="{{ asset('images/mwWARM.jpg') }}">
								<img src="{{ asset ('images/mw40c.jpg') }}">
							</div>																	
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwHot') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Hot
							</label>
							<div class="laundry-symbol">
								<img src="{{ asset('images/mwHOT.jpg') }}">
								<img src="{{ asset('images/mw50c.jpg') }}">
							</div>																
						</div>	
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwColdPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Cold, Permanent Press
							</label>
							<img src="{{ asset('images/mwCOLDpp.jpg') }}" class="laundry-symbol">								
						</div>	
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwWarmPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Warm, Permanent Press
							</label>
							<img src="{{ asset('images/mwWARMpp.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('wash', 'mwHotPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Machine Wash Hot, Permanent Press
							</label>
							<img src="{{ asset('images/mwHOTpp.jpg') }}" class="laundry-symbol">								
						</div>																																			
					</div>
				</div>
				<div class="form-group">
					{{ Form::label('dryingInstructions', 'Drying Instructions', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-8">
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdNormal') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Normal
							</label>
							<img src="{{ asset('images/tdNormal.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdNoHeat') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, No Heat
							</label>
							<img src="{{ asset('images/tdNoHeat.jpg') }}" class="laundry-symbol">								
						</div>	
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdLowHeat') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Low Heat
							</label>
							<img src="{{ asset('images/tdLowHeat.jpg') }}" class="laundry-symbol">								
						</div>	
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdMedium') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Medium
							</label>
							<img src="{{ asset('images/tdMedium.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdHigh') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, High
							</label>
							<img src="{{ asset('images/tdHigh.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdNoHeatPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Permanent Press, No Heat
							</label>
							<img src="{{ asset('images/tdNoHeatpp.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdLowHeatPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Permanent Press, Low Heat
							</label>
							<img src="{{ asset('images/tdLowHeatpp.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdMediumPerm') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Permanent Press, Medium
							</label>
							<img src="{{ asset('images/tdMediumpp.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdNoHeatGentle') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Gentle Cycle, No Heat
							</label>
							<img src="{{ asset('images/tdNoHeatGentle.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdLowHeatGentle') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Gentle Cycle, Low Heat
							</label>
							<img src="{{ asset('images/tdLowHeatGentle.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'tdMediumGentle') }}
								<span class="circle"></span>
								<span class="check"></span>
								Tumble Dry, Gentle Cycle, Medium
							</label>
							<img src="{{ asset('images/tdMediumGentle.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'lineDry') }}
								<span class="circle"></span>
								<span class="check"></span>
								Line Dry
							</label>
							<img src="{{ asset('images/LineDry.jpg') }}" class="laundry-symbol">								
						</div>
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'dripDry') }}
								<span class="circle"></span>
								<span class="check"></span>
								Drip Dry
							</label>
							<img src="{{ asset('images/DripDry.jpg') }}" class="laundry-symbol">								
						</div>	
						<div class="radio radio-primary">
							<label>
								{{ Form::radio('dry', 'dryFlat') }}
								<span class="circle"></span>
								<span class="check"></span>
								Dry Flat
							</label>
							<img src="{{ asset('images/DryFlat.jpg') }}" class="laundry-symbol">								
						</div>																																																																																														
					</div>															
				</div>
				<div class="form-group">
					{{ Form::label('color', 'Color', array('class' => 'col-md-2 control-label')) }}
					<div class="col-md-8">
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'red') }}
								<span class="circle"></span>
								<span class="check"></span>
								Red
							</label>
							<img src="{{ asset('images/item_colors/red.png') }}" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'pink') }}
								<span class="circle"></span>
								<span class="check"></span>
								Pink
							</label>
							<img src="{{ asset('images/item_colors/pink.png') }}" class="color">								
						</div>		
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'purple') }}
								<span class="circle"></span>
								<span class="check"></span>
								Purple
							</label>
							<img src="{{ asset('images/item_colors/purple.png') }}" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'blue') }}
								<span class="circle"></span>
								<span class="check"></span>
								Blue 
							</label>
							<img src="{{ asset('images/item_colors/blue.png') }}" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'teal') }}
								<span class="circle"></span>
								<span class="check"></span>
								Teal 
							</label>
							<img src="{{ asset('images/item_colors/teal.png') }}" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'green') }}
								<span class="circle"></span>
								<span class="check"></span>
								Green 
							</label>
							<img src="{{ asset('images/item_colors/green.png') }}" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'yellow') }}
								<span class="circle"></span>
								<span class="check"></span>
								Yellow  
							</label>
							<img src="{{ asset('images/item_colors/yellow.png') }}" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'orange') }}
								<span class="circle"></span>
								<span class="check"></span>
								Orange  
							</label>
							<img src="{{ asset('images/item_colors/orange.png') }}" class="color">								
						</div>
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'brown') }}
								<span class="circle"></span>
								<span class="check"></span>
								Brown  
							</label>
							<img src="{{ asset('images/item_colors/brown.png') }}" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'grey') }}
								<span class="circle"></span>
								<span class="check"></span>
								Grey  
							</label>
							<img src="{{ asset('images/item_colors/grey.png') }}" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'black') }}
								<span class="circle"></span>
								<span class="check"></span>
								Black  
							</label>
							<img src="{{ asset('images/item_colors/black.png') }}" class="color">								
						</div>	
						<div class="radio radio-primary col-md-4 item-color">
							<label>
								{{ Form::radio('color', 'white') }}
								<span class="circle"></span>
								<span class="check"></span>
								White  
							</label>
							<img src="{{ asset('images/item_colors/white.png') }}" class="color">								
						</div>																																																																																																																																																																								
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2">
						{{ Form::submit('SUBMIT', array('class' => 'btn btn-primary')) }}						
					</div>
				</div>				
			</fieldset>
		{{ Form::close() }}
	</div>
@stop