<?php

class PlayerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$players = Player::all();

		return View::make('player.index')
			->with('players', $players);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('player.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
	            'name'       => 'required',
	            'email'      => 'required|email',
	        );
	        $validator = Validator::make(Input::all(), $rules);

	        // process the login
	        if ($validator->fails()) {
	            return Redirect::to('player/create')
	                ->withErrors($validator)
	                ->withInput(Input::except('password'));
	        } else {
	            // store
	            $player = new Player;
	            $player->name       = Input::get('name');
	            $player->email      = Input::get('email');
	            $player->save();

	            // redirect
	            Session::flash('message', 'Successfully created player!');
	            return Redirect::to('player');
	        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$player = Player::find($id);

		$allSongs = Song::all();
		$allSongsArr = array();
		foreach($allSongs as $song)
    		{
			$allSongsArr[$song->id] = $song->name;	
    		}
		$songdata = array(
     		'songs' => $allSongsArr
     		);



		return View::make('player.show')
			->with('player', $player)->with('songdata', $songdata);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$player = Player::find($id);


		return View::make('player.edit')
			->with('player', $player);


	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
	            'name'       => 'required',
	            'email'      => 'required|email',
	        );
	       $validator = Validator::make(Input::all(), $rules);

	        // process the login
	        if ($validator->fails()) {
	            return Redirect::to('player/' . $id . '/edit')
	                ->withErrors($validator)
	                ->withInput(Input::except('password'));
	        } else {
	            // store
	            $player = Player::find($id);
	            $player->name       = Input::get('name');
	            $player->email      = Input::get('email');
	            $player->save();

	            // redirect
	            Session::flash('message', 'Successfully updated!');
	            return Redirect::to('player');
	        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$player = Player::find($id);
		$player->delete();

		Session::flash('message', 'Successfully deleted!');
        	return Redirect::to('player');
	}

	public function addSong()
	{

		$player = Player::find(Input::get('player'));
		$song = Song::find(Input::get('song'));

		$part = Input::get('part');

		$player->song()->save($song, array('part' => $part));
		
		return Redirect::back()->with('message','Song added!');
	}


}
