<?php

class LaundryController extends BaseController {


	public function sort() 
	{

		// setup Pre() function shortcut
		if (! function_exists('Pre')) {
		    function Pre($data, $label = NULL) {
		        return Paste\Pre::render($data, $label);
		    }
		}

		$id = Auth::id();

		$items = Item::where('user_id', '=', $id)->get();

		$output = '';



		# Arrays for Washing Instructions
		$mwNormal = array();
		$mwCold = array();
		$mwWarm = array();
		$mwHot = array();
		$mwColdPerm = array();
		$mwWarmPerm = array();
		$mwHotPerm = array();

		# Arrays for Drying Instructions
		$tdNormal = array();
		$tdNoHeat = array();
		$tdLowHeat = array();
		$tdMedium = array();
		$tdHigh = array();
		$tdNoHeatPerm = array();
		$tdLowHeatPerm = array();
		$tdMediumPerm = array();
		$tdNoHeatGentle = array();
		$tdLowHeatGentle = array();
		$tdMediumGentle = array();
		$lineDry = array();
		$dripDry = array();
		$dryFlat = array();

		foreach ($items as $item) 
		{
			if (Input::has($item->id))
			{
				# Sorts items by washing instructions
				if ($item->washing_instructions == 'mwNormal') 
				{
					array_push($mwNormal, $item->id);
				}
				elseif ($item->washing_instructions == 'mwCold') 
				{
					array_push($mwCold, $item->id); 
				}
				elseif ($item->washing_instructions == 'mwWarm') 
				{
					array_push($mwWarm, $item->id);
				}
				elseif ($item->washing_instructions == 'mwHot') 
				{
					array_push($mwHot, $item->id);
				}
				elseif ($item->washing_instructions == 'mwColdPerm') 
				{
					array_push($mwColdPerm, $item->id);
				}
				elseif ($item->washing_instructions == 'mwWarmPerm') 
				{
					array_push($mwWarmPerm, $item->id);
				}
				elseif ($item->washing_instructions == 'mwHotPerm') 
				{
					array_push($mwHotPerm, $item->id);
				}

				# Sorts items by drying instructions
				if ($item->drying_instructions == 'tdNormal') {
					array_push($tdNormal, $item->id);
				}
				elseif ($item->drying_instructions == 'tdNoHeat') {
					array_push($tdNoHeat, $item->id);
				}
				elseif ($item->drying_instructions == 'tdLowHeat') {
					array_push($tdLowHeat, $item->id);
				}
				elseif ($item->drying_instructions == 'tdMedium') {
					array_push($tdMedium, $item->id);
				}		
				elseif ($item->drying_instructions == 'tdHigh') {
					array_push($tdHigh, $item->id);
				}		
				elseif ($item->drying_instructions == 'tdNoHeatPerm') {
					array_push($tdNoHeatPerm, $item->id);
				}			
				elseif ($item->drying_instructions == 'tdLowHeatPerm') {
					array_push($tdLowHeatPerm, $item->id);
				}			
				elseif ($item->drying_instructions == 'tdMediumPerm') {
					array_push($tdMediumPerm, $item->id);
				}	
				elseif ($item->drying_instructions == 'tdNoHeatGentle') {
					array_push($tdNoHeatGentle, $item->id);
				}				
				elseif ($item->drying_instructions == 'tdLowHeatGentle') {
					array_push($tdLowHeatGentle, $item->id);
				}			
				elseif ($item->drying_instructions == 'tdMediumGentle') {
					array_push($tdMediumGentle, $item->id);
				}							
				elseif ($item->drying_instructions == 'lineDry') {
					array_push($lineDry, $item->id);
				}	
				elseif ($item->drying_instructions == 'dripDry') {
					array_push($dripDry, $item->id);
				}
				elseif ($item->drying_instructions == 'dryFlat') {
					array_push($dryFlat, $item->id);
				}						
			}
		}

		$washData = array
		(
			'mwNormal' => $mwNormal, 
			'mwCold' => $mwCold, 
			'mwWarm' => $mwWarm, 
			'mwHot' => $mwHot, 
			'mwColdPerm' => $mwColdPerm, 
			'mwWarmPerm' => $mwWarmPerm, 
			'mwHotPerm' => $mwHotPerm
		);

		$washData = array_filter($washData); 

		$dryData = array
		(
			'tdNormal' => $tdNormal, 
			'tdNoHeat' => $tdNoHeat, 
			'tdLowHeat' => $tdLowHeat, 
			'tdMedium' => $tdMedium, 
			'tdHigh' => $tdHigh, 
			'tdNoHeatPerm' => $tdNoHeatPerm, 
			'tdLowHeatPerm' => $tdLowHeatPerm,
			'tdMediumPerm' => $tdMediumPerm, 
			'tdNoHeatGentle' => $tdNoHeatGentle, 
			'tdLowHeatGentle' => $tdLowHeatGentle, 
			'tdMediumGentle' => $tdMediumGentle, 
			'lineDry' => $lineDry, 
			'dripDry' => $dripDry, 
			'dryFlat' => $dryFlat
		);
		
		$dryData = array_filter($dryData);

		$data = array
		(
			'washData' => $washData, 
			'dryData' => $dryData
		);

		#$output = Paste\Pre::render(array_filter($data));

		$output = Paste\Pre::render($washData);

		return View::make('my-laundry')
			->with('washData', $washData)
			->with('dryData', $dryData)
			->with('items', '$items');		
	}
}