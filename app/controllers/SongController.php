<?php

class SongController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$songs = Song::all();

		return View::make('song.index')
			->with('songs', $songs);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('song.create');
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
	            'artist'      => 'required',
	        );
	        $validator = Validator::make(Input::all(), $rules);

	        // process the login
	        if ($validator->fails()) {
	            return Redirect::to('song/create')
	                ->withErrors($validator)
	                ->withInput(Input::except('password'));
	        } else {
	            // store
	            $song = new Song;
	            $song->name       = Input::get('name');
	            $song->artist      = Input::get('artist');
	            $song->gLead 	= (bool) Input::get('gLead');
	            $song->gRhythm= (bool) Input::get('gRhythm');
	            $song->gAcoustic= (bool) Input::get('gAcoustic');
	            $song->Bass= (bool) Input::get('Bass');
	            $song->Drums= (bool) Input::get('Drums');
	            $song->vHarmony= (bool) Input::get('vHarmony');
	            $song->vLead 	= (bool) Input::get('vLead');
	            $song->keys = (bool) Input::get('keys');
	            $song->save();

	            // redirect
	            Session::flash('message', 'Successfully created song!');
	            return Redirect::to('song');
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
		$song = Song::find($id);

		return View::make('song.show')
			->with('song', $song);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$song = Song::find($id);

		return View::make('song.edit')
			->with('song', $song);
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
	            'artist'      => 'required',
	        );
	       $validator = Validator::make(Input::all(), $rules);

	        // process the login
	        if ($validator->fails()) {
	            return Redirect::to('song/' . $id . '/edit')
	                ->withErrors($validator)
	                ->withInput(Input::except('password'));
	        } else {
	            // store
	            $song = Song::find($id);
	            $song->name       = Input::get('name');
	            $song->artist      = Input::get('artist');
	            $song->gLead 	= (bool) Input::get('gLead');
	            $song->gRhythm= (bool) Input::get('gRhythm');
	            $song->gAcoustic= (bool) Input::get('gAcoustic');
	            $song->Bass= (bool) Input::get('Bass');
	            $song->Drums= (bool) Input::get('Drums');
	            $song->vHarmony= (bool) Input::get('vHarmony');
	            $song->vLead 	= (bool) Input::get('vLead');
	            $song->keys = (bool) Input::get('keys');
	            $song->save();

	            // redirect
	            Session::flash('message', 'Successfully updated!');
	            return Redirect::to('song');
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
		$song = Song::find($id);
		$song->delete();

		Session::flash('message', 'Successfully deleted!');
        	return Redirect::to('song');
	}


}