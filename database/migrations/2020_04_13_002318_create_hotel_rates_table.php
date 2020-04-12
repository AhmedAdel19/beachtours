<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotelRatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotel_rates', function(Blueprint $table)
		{
			$table->increments('hotelrateid');
			$table->integer('hotelID')->nullable()->default('NULL');
			$table->integer('roomtypeID')->nullable()->default('NULL');
			$table->integer('season')->nullable()->default('NULL');
			$table->integer('rate')->nullable()->default('NULL');
			$table->integer('currency')->nullable()->default('NULL');
			$table->string('images', 200)->nullable()->default('NULL');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hotel_rates');
	}

}
