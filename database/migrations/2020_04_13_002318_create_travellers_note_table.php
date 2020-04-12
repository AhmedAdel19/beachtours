<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTravellersNoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travellers_note', function(Blueprint $table)
		{
			$table->increments('travellers_noteID');
			$table->text('title', 65535)->nullable()->default('NULL');
			$table->integer('travellerID')->nullable()->default('NULL');
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
		Schema::drop('travellers_note');
	}

}
