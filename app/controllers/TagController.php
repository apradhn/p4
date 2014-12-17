<?php

class TagController extends \BaseController {

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
	 * @param  int  $id
	 * @return Response
	 */
	public function create($id)
	{
		$item = Item::find($id);
		return View::make('add-tags')
			->with('item', $item);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	  * @param  int  $id
	 * @return Response
	 */
	public function store($id)
	{
		$item = Item::find($id);

		# Instantiate a new Item class
		$tag = new Tag();

		# Set
		$tag->name = Input::get('name');
		$tag->save();

		# Attach tag to item 
		$item->tags()->attach($tag);

		return Redirect::to('/my-closet')
			->with('flash_message', 'Tag Added!');

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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
