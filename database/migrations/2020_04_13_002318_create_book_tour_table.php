<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookTourTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_tour', function(Blueprint $table)
		{
			$table->increments('booktourID');
			$table->integer('bookingID')->nullable()->default('NULL');
			$table->integer('tourcategoriesID')->nullable()->default('NULL');
			$table->integer('tourID')->nullable()->default('NULL');
			$table->integer('tourdateID')->nullable()->default('NULL');
			$table->timestamps();
			$table->integer('entry_by')->nullable()->default('NULL');
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
		Schema::drop('book_tour');
	}

}
