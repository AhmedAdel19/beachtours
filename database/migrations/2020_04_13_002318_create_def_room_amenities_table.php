<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefRoomAmenitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_room_amenities', function(Blueprint $table)
		{
			$table->increments('roomamenityID');
			$table->string('amenty', 200)->nullable()->default('NULL');
			$table->boolean('status')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('def_room_amenities');
	}

}
