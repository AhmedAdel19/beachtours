<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefAirlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_airlines', function(Blueprint $table)
		{
			$table->increments('airlineID');
			$table->string('airline', 200)->nullable()->default('NULL');
			$table->integer('countryID')->nullable()->default('NULL');
			$table->integer('status')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('def_airlines');
	}

}
