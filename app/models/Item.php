<?php

class Item extends Eloquent {
	
	public function user() {
		# Item belongs to user 
		# Define an inverse one-to-many relationship
		return $this->belongsTo('User');
	}

	public function tags() {
		# Items  belong to many Tags
        return $this->belongsToMany('Tag');		
	}
	
	/**
	 * Assigns color_url field based on the color passed
	 *
	 * @param string $color
	 * @return string $colorUrl
	 */
	public static function getColorURL($color) {
		if ($color == 'red') {
			$colorURL = 'images/item_colors/red.png';
		}

		if ($color == 'pink') {
			$colorURL = 'images/item_colors/pink.png';
		}

		if ($color == 'purple') {
			$colorURL = 'images/item_colors/purple.png';
		}

		if ($color == 'blue') {
			$colorURL = 'images/item_colors/blue.png';
		}

		if ($color == 'teal') {
			$colorURL = 'images/item_colors/teal.png';
		}

		if ($color == 'green') {
			$colorURL = 'images/item_colors/green.png';
		}

		if ($color == 'yellow') {
			$colorURL = 'images/item_colors/yellow.png';
		}

		if ($color == 'orange') {
			$colorURL = 'images/item_colors/orange.png';
		}

		if ($color == 'brown') {
			$colorURL = 'images/item_colors/brown.png';
		}

		if ($color == 'grey') {
			$colorURL = 'images/item_colors/grey.png';
		}

		if ($color == 'black') {
			$colorURL = 'images/item_colors/black.png';
		}

		if ($color == 'white') {
			$colorURL = 'images/item_colors/white.png';
		}

		return $colorURL;		

	}

	/**
    * Search among items
    * @return Collection
    */

	public static function searchName($query) {
        $user = Auth::user()->id;

        $items = Item::where('user_id', '=', $user)
        	->where('name', 'LIKE', "%$query%")	
        	->get();

        return $items;	
	}

	public static function searchTag($query) {
        $user = Auth::user()->id;

        $items = Item::with('tags')
        	->where('user_id', '=', $user)
        	->whereHas('tags', function($q) use ($query) {
        		$q->where('name', 'LIKE', "%$query%");
        	})	
        	->get();

        return $items;	
	}

	public static function searchColor($query) {
        $user = Auth::user()->id;

        $items = Item::where('user_id', '=', $user)
        	->where('color', 'LIKE', "%$query%")
        	->get();

        return $items;	
	}

}

