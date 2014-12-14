<?php

class ItemTableSeeder extends Seeder {

	public function run()
	{
	  	$itemName = array(
	  		'Flannel Plaid Shirt',
	  		'Oxford Shirt', 
	  		'Chambray Shirt', 
	  		'Crewneck Sweater',
	  		'Mixed Yarn Cardigan',
	  		'Dylan Denim Jeans',
	  		'Lincoln Twill Pants',
	  		'Newport Chinos',
	  		'Slim Trousers',
	  		'Zip Hoodie',
	  		'Knit Sweatpants',
	  		'Pullover Hoodie',
	  		'Striped Tee',
	  		'V-Neck Tee', 
	  		'Crew Neck Tee',
	  		'Checked Boxers',
	  		'Striped Boxers',
	  		'Solid Boxers',
	  		'Checked Briefs',
	  		'Striped Briefs',
	  		'Solid Briefs',
	  		'Crew Socks', 
	  		'Argyle Socks', 
	  		'Business Socks',
	  		'Striped Socks'
	  	);

	  	$washingInstructions = array(
	  		'mwNormal',
	  		'mwCold',
	  		'mwWarm',
	  		'mwHot',
	  		'mwColdPerm',
	  		'mwWarmPerm',
	  		'mwHotPerm',

	  	);

	  	$dryingInstructions = array(
	  		'tdNormal',
	  		'tdNoHeat',
	  		'tdLowHeat',
	  		'tdMedium',
	  		'tdHigh',
	  		'tdNoHeatPerm',
	  		'tdLowHeatPerm',
	  		'tdMediumPerm',
	  		'tdNoHeatGentle',
	  		'tdLowHeatGentle',
	  		'tdMediumGentle',
	  		'lineDry',
	  		'dripDry',
	  		'DryFlat'
	  	);

	  	$itemColor = array(
	  		'red',
	  		'pink',
	  		'purple',
	  		'blue',
	  		'teal',
	  		'green',
	  		'yellow',
	  		'orange',
	  		'brown',
	  		'grey',
	  		'black',
	  		'white'
	  	);

	  	$users = User::all();

	  	foreach ($users as $user) {
			for ($i = 0; $i < 15; $i++ ) {

				$randomItem = $itemName[array_rand($itemName)];
				$randomWash = $washingInstructions[array_rand($washingInstructions)];
				$randomDry = $dryingInstructions[array_rand($dryingInstructions)];
				$randomColor = $itemColor[array_rand($itemColor)];
				$randomColorURL = Item::getColorURL($randomColor);

				$item = new Item();
				$item->name = $randomItem;
				$item->washing_instructions = $randomWash;
				$item->drying_instructions = $randomDry;
				$item->color = $randomColor;
				$item->color_url = $randomColorURL;

				$item->user()->associate($user); 

				$item->save();					
			}  		
	  	}
	}
}
