<?php

class ItemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


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
		$user = Auth::user();

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

		Flash::success('New item added! Select the items you want to wash, then click "SORT!"');

		return Redirect::to('/my-closet');
}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
