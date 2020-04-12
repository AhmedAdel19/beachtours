<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookings', function(Blueprint $table)
		{
			$table->increments('bookingsID');
			$table->string('bookingno')->nullable()->default('NULL')->unique('bookingno');
			$table->integer('travellerID')->nullable()->default('NULL');
			$table->integer('tour')->nullable()->default(0);
			$table->integer('hotel')->nullable()->default(0);
			$table->integer('flight')->nullable()->default(0);
			$table->integer('car')->nullable()->default(0);
			$table->integer('extraservices')->nullable()->default(0);
			$table->timestamps();
			$table->integer('entry_by')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bookings');
	}

}
