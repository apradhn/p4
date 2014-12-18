<?php

class ItemController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    return View::make('add-clothes');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		# Remember the current user, so Item is user-specific
		$user = Auth::user();

		# Establish rules of adding an item; all fields required
		$rules = array(
			'name' => 'required', 
			'wash' => 'required',
			'dry' => 'required',
			'color' => 'required'
		);

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {

        	Flash::warning('Item creation failed; please fix the errors listed below.');

            return Redirect::to('/item/create')
                ->withInput()
                ->withErrors($validator);
        }

        # Try to add the item 
        try {
            $user->save();
        }
        # Fail
        catch (Exception $e) {

        	Flash::warning('Sign up failed; please try again');

            return Redirect::to('/item/create')->withInput();
        }

		# Instantiate a new Item model class 
		$item = new Item(); 

		# Set
		$item->name = Input::get('name');
		$item->washing_instructions = Input::get('wash');
		$item->drying_instructions = Input::get('dry');
		$item->color = Input::get('color');
		$item->color_url = Item::getColorURL($item->color);

		$item->user()->associate($user); # <-- Associate the user with this item

		$item->save();

		# Return to My Closet 
		Flash::success('New item added! Select the items you want to wash, then click "SORT!"');

		return Redirect::to('/my-closet');
}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$item = Item::find($id);
		return View::make('edit-clothes')
			->with('item', $item);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		# Establish rules of adding an item; all fields required
		$rules = array(
			'name' => 'required', 
			'wash' => 'required',
			'dry' => 'required',
			'color' => 'required'
		);

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {

        	Flash::warning('Item creation failed; please fix the errors listed below.');

            return Redirect::to('/item/create')
                ->withInput()
                ->withErrors($validator);
        }

        # Try to add the item 
        try {
            $user->save();
        }
        # Fail
        catch (Exception $e) {

        	Flash::warning('Sign up failed; please try again');

            return Redirect::to('/item/create')->withInput();
        }

        # Find the selected item 
		$item = Item::find($id);        

		# Set
		$item->name = Input::get('name');
		$item->washing_instructions = Input::get('wash');
		$item->drying_instructions = Input::get('dry');
		$item->color = Input::get('color');
		$item->color_url = Item::getColorURL($item->color);

		$item->save();

		Flash::success('Item Updated!');

		return Redirect::to('/my-closet');		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$item = Item::find($id); 

		$item->delete();

		Flash::warning('Item Deleted!');

		return Redirect::to('/my-closet');			
	}

	/**
	* Ajax Search form
	* http://localhost/item/search
	*/

	public function postSearchName() 
	{
	    if(Request::ajax()) {

	        $query  = Input::get('query');

	        # We're demoing two possible return formats: JSON or HTML
	        $format = Input::get('format');

	        # Do the actual query
	        $items = Item::searchName($query);

	        if($format == 'html') {

	            $results = $items;

	            # Return the HTML/View to JavaScript...

	            $results = View::make('item_search_result')->with('items', $items)->render();

	            return $results;
	        }
	    }
	}

	public function postSearchTag() 
	{
	    if(Request::ajax()) {

	        $query  = Input::get('query');

	        # We're demoing two possible return formats: JSON or HTML
	        $format = Input::get('format');

	        # Do the actual query
	        $items = Item::searchTag($query);

	        if($format == 'html') {

	            $results = $items;

	            # Return the HTML/View to JavaScript...

	            $results = View::make('item_search_result')->with('items', $items)->render();

	            return $results;
	        }
	    }
	}


	public function postSearchColor() 
	{
	    if(Request::ajax()) {

	        $query  = Input::get('query');

	        # We're demoing two possible return formats: JSON or HTML
	        $format = Input::get('format');

	        # Do the actual query
	        $items = Item::searchColor($query);

	        if($format == 'html') {

	            $results = $items;

	            # Return the HTML/View to JavaScript...

	            $results = View::make('item_search_result')->with('items', $items)->render();

	            return $results;
	        }
	    }
	}


}
