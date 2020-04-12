<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTravellersFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travellers_files', function(Blueprint $table)
		{
			$table->increments('fileID');
			$table->integer('travellerID')->nullable()->default('NULL');
			$table->integer('file_type')->nullable()->default('NULL');
			$table->string('file')->nullable()->default('NULL');
			$table->text('remarks', 65535)->nullable()->default('NULL');
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
		Schema::drop('travellers_files');
	}

}
