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

		if ($item->color == 'red') {
			$item->color_url = 'images/item_colors/red.png';
		}

		if ($item->color == 'pink') {
			$item->color_url = 'images/item_colors/pink.png';
		}

		if ($item->color == 'purple') {
			$item->color_url = 'images/item_colors/purple.png';
		}

		if ($item->color == 'blue') {
			$item->color_url = 'images/item_colors/blue.png';
		}

		if ($item->color == 'teal') {
			$item->color_url = 'images/item_colors/teal.png';
		}

		if ($item->color == 'green') {
			$item->color_url = 'images/item_colors/green.png';
		}

		if ($item->color == 'yellow') {
			$item->color_url = 'images/item_colors/yellow.png';
		}

		if ($item->color == 'orange') {
			$item->color_url = 'images/item_colors/orange.png';
		}

		if ($item->color == 'brown') {
			$item->color_url = 'images/item_colors/brown.png';
		}

		if ($item->color == 'grey') {
			$item->color_url = 'images/item_colors/grey.png';
		}

		if ($item->color == 'black') {
			$item->color_url = 'images/item_colors/black.png';
		}

		if ($item->color == 'white') {
			$item->color_url = 'images/item_colors/white.png';
		}

		$item->user()->associate($user); # <-- Associate the user with this item

		$item->save();

		return Redirect::to('/my-closet')->with('flash_message', 'New item added to closet!');
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

		$item->save();

		return Redirect::to('/my-closet')->with('flash_message', 'Item Updated!');		
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

		return Redirect::to('/my-closet')->with('flash_message', 'Item Updated!');			
	}


}
