<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookFlightTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_flight', function(Blueprint $table)
		{
			$table->increments('bookflightID');
			$table->integer('bookingID')->nullable()->default('NULL');
			$table->string('travellersID', 200)->nullable()->default('NULL');
			$table->string('airlineID', 200)->nullable()->default('NULL');
			$table->integer('class')->nullable()->default('NULL');
			$table->integer('return')->nullable()->default('NULL');
			$table->integer('depairportID')->nullable()->default('NULL');
			$table->integer('arrairportID')->nullable()->default('NULL');
			$table->dateTime('departing')->nullable()->default('NULL');
			$table->string('arrFlightNO', 200)->nullable()->default('NULL');
			$table->dateTime('returning')->nullable()->default('NULL');
			$table->string('depFlightNO', 200)->nullable()->default('NULL');
			$table->timestamps();
			$table->integer('status')->nullable()->default(2);
			$table->string('PNR', 11)->nullable()->default('NULL');
			$table->string('eticketno', 30)->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book_flight');
	}

}
