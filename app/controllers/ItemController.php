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
		# Instantiate a new Item model class 
		$item = new Item(); 

		# Set
		$item->name = Input::get('name');
		$item->washing_instructions = Input::get('wash');
		$item->drying_instructions = Input::get('dry');
		$item->color = Input::get('color');

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
