<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotelsNoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotels_note', function(Blueprint $table)
		{
			$table->increments('hotel_noteID');
			$table->integer('hotelID')->nullable()->default('NULL');
			$table->text('title', 65535)->nullable()->default('NULL');
			$table->text('note')->nullable()->default('NULL');
			$table->string('style', 200)->nullable()->default('NULL');
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
		Schema::drop('hotels_note');
	}

}
