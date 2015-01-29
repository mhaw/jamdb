<?php

    class Player extends Eloquent
    {
    	public function song() {
			return $this->belongsToMany('Song');
		}
    }
    