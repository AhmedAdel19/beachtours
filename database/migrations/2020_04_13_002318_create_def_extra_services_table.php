<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefExtraServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_extra_services', function(Blueprint $table)
		{
			$table->integer('extraserviceID', true);
			$table->string('service_name', 250);
			$table->integer('price');
			$table->integer('currencyID')->nullable()->default('NULL');
			$table->text('description', 65535);
			$table->boolean('status')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('def_extra_services');
	}

}
