<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefAirportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_airports', function(Blueprint $table)
		{
			$table->integer('airportID', true);
			$table->string('airport_name', 50)->default('\'\'');
			$table->integer('countryID');
			$table->integer('cityID');
			$table->string('IATA', 10)->nullable()->default('NULL');
			$table->integer('status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('def_airports');
	}

}
