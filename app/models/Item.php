<?php

class Item extends Eloquent {
	
	public function user() {
		# Item belongs to user 
		# Define an inverse one-to-many relationship
		return $this->belongsTo('User');
	}
}

