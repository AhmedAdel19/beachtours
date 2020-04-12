<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookRoomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_room', function(Blueprint $table)
		{
			$table->increments('roomID');
			$table->integer('bookingID')->nullable()->default('NULL');
			$table->integer('roomtype')->nullable()->default('NULL');
			$table->string('travellers', 200)->nullable()->default('NULL');
			$table->timestamps();
			$table->integer('entry_by')->nullable()->default('NULL');
			$table->integer('status')->nullable()->default(2);
			$table->text('remarks', 65535)->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book_room');
	}

}
