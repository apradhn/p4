<?php

class Tag extends Eloquent { 

    public function books() {
        # Tags belong to many Items
        return $this->belongsToMany('Item');
    }

}