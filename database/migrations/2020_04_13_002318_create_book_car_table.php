<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookCarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_car', function(Blueprint $table)
		{
			$table->increments('bookcarID');
			$table->integer('bookingID')->nullable()->default('NULL');
			$table->integer('carbrandID')->nullable()->default('NULL');
			$table->integer('carsID')->nullable()->default('NULL');
			$table->date('start')->nullable()->default('NULL');
			$table->date('end')->nullable()->default('NULL');
			$table->integer('rate')->nullable()->default('NULL');
			$table->integer('status')->nullable()->default('NULL');
			$table->timestamps();
			$table->string('pickup', 200)->nullable()->default('NULL');
			$table->string('dropoff', 200)->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book_car');
	}

}
