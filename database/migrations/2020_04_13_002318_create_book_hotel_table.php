<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookHotelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_hotel', function(Blueprint $table)
		{
			$table->increments('bookhotelID');
			$table->integer('bookingID')->nullable()->default('NULL');
			$table->integer('countryID')->nullable()->default('NULL');
			$table->integer('cityID')->nullable()->default('NULL');
			$table->integer('hotelID')->nullable()->default('NULL');
			$table->date('checkin')->nullable()->default('NULL');
			$table->date('checkout')->nullable()->default('NULL');
			$table->timestamps();
			$table->integer('status')->nullable()->default(2);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book_hotel');
	}

}
