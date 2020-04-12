<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefVehicleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_vehicle', function(Blueprint $table)
		{
			$table->integer('vehicleID', true);
			$table->string('vehicle_name', 300);
			$table->integer('capacity');
			$table->integer('supplier_id');
			$table->integer('cost')->nullable()->default('NULL');
			$table->integer('currencyID')->nullable()->default('NULL');
			$table->text('notes', 16777215)->nullable()->default('NULL');
			$table->boolean('status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('def_vehicle');
	}

}
