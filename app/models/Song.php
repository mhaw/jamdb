<?php

    class Song extends Eloquent
    {
    	public function player() {
			return $this->belongsToMany('Player')->withPivot('part');
		}
    }
    