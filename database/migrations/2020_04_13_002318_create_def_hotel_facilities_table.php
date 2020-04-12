<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefHotelFacilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_hotel_facilities', function(Blueprint $table)
		{
			$table->increments('hotelfacilityID');
			$table->string('facility', 100)->nullable()->default('NULL');
			$table->string('iconID', 100)->nullable()->default('NULL');
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
		Schema::drop('def_hotel_facilities');
	}

}
