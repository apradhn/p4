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

		$input = Input::all();

		$input = Pre($input);

		return View::make('my-laundry')->with('input', $input);
	}
}