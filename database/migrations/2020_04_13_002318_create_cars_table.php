<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function(Blueprint $table)
		{
			$table->increments('carsID');
			$table->integer('carbrandID')->nullable()->default('NULL');
			$table->string('model', 200)->nullable()->default('NULL');
			$table->text('description', 65535)->nullable()->default('NULL');
			$table->integer('passengers')->nullable()->default('NULL');
			$table->integer('cardoors')->nullable()->default('NULL');
			$table->integer('transmission')->nullable()->default('NULL');
			$table->string('baggage', 11)->nullable()->default('NULL');
			$table->integer('type')->nullable()->default('NULL');
			$table->integer('featured')->nullable()->default('NULL');
			$table->integer('dayrate')->nullable()->default('NULL');
			$table->integer('weekrate')->nullable()->default('NULL');
			$table->integer('monthrate')->nullable()->default('NULL');
			$table->integer('currencyID')->nullable()->default('NULL');
			$table->integer('airportpickup')->nullable()->default('NULL');
			$table->string('availableextras', 200)->nullable()->default('NULL');
			$table->string('images', 300)->nullable()->default('NULL');
			$table->string('similarcars', 200)->nullable()->default('NULL');
			$table->integer('status')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cars');
	}

}
