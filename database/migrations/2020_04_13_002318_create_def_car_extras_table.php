<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefCarExtrasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_car_extras', function(Blueprint $table)
		{
			$table->increments('carsextrasID');
			$table->string('name', 200)->nullable()->default('NULL');
			$table->integer('price')->nullable()->default('NULL');
			$table->integer('currency')->nullable()->default('NULL');
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
		Schema::drop('def_car_extras');
	}

}
