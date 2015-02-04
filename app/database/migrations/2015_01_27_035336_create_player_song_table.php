<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerSongTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('player_song', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('player_id')->unsigned()->index();
			$table->integer('song_id')->unsigned()->index();
			$table->integer('part');

			
			$table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
			$table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('player_song');
	}

}
