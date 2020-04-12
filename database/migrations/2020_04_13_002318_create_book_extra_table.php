<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookExtraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_extra', function(Blueprint $table)
		{
			$table->increments('bookextraID');
			$table->integer('bookingID')->nullable()->default('NULL');
			$table->integer('extraserviceID')->nullable()->default('NULL');
			$table->text('remarks')->nullable()->default('NULL');
			$table->integer('status')->nullable()->default('NULL');
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
		Schema::drop('book_extra');
	}

}
