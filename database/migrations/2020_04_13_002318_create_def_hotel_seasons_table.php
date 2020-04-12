<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefHotelSeasonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_hotel_seasons', function(Blueprint $table)
		{
			$table->increments('seasonID');
			$table->integer('seasonname')->nullable()->default('NULL');
			$table->date('start')->nullable()->default('NULL');
			$table->date('end')->nullable()->default('NULL');
			$table->integer('status')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('def_hotel_seasons');
	}

}
