<?php

    class Player extends Eloquent
    {

    	protected $parts = array(
    		'0' => 'Guitar - Lead',
		'1' => 'Guitar - Rhythm',
		'2' => 'Guitar - Acoustic',
		'3' => 'Bass',
		'4' => 'Drums',
		'5' => 'Vocal - Harmony',
		'6' => 'Vocal - Lead',
		'7' => 'Keys'
    	);

    	public function song() {
			return $this->belongsToMany('Song')->withPivot('part');
		}

	public function getPartAttribute($value)
	{
		if(is_null($value)) {
            		return 'n/a';
		}

		return $this->parts[$value];
	}


    }
    