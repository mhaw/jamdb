<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('songs', function($table) {

			$table->increments('id');

			$table->timestamps();

			$table->string('name');
        		$table->string('artist');
        		$table->boolean('gLead');
        		$table->boolean('gRhythm');
        		$table->boolean('gAcoustic');
        		$table->boolean('Bass');
        		$table->boolean('Drums');
        		$table->boolean('vHarmony');
        		$table->boolean('vLead');
        		$table->boolean('keys');

        	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('songs');
	}

}
