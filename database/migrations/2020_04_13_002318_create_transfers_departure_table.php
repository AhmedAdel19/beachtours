<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransfersDepartureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transfers_departure', function(Blueprint $table)
		{
			$table->integer('transfer_departureID', true);
			$table->integer('countryID')->nullable()->default('NULL');
			$table->integer('cityID')->nullable()->default('NULL');
			$table->dateTime('departuredate')->nullable()->default('NULL');
			$table->integer('departureairport')->nullable()->default('NULL');
			$table->string('departureflightno', 10)->nullable()->default('NULL');
			$table->dateTime('departuretransferdate')->nullable()->default('NULL');
			$table->integer('departuretransferman')->nullable()->default('NULL');
			$table->text('departuretransfernotes', 65535)->nullable()->default('NULL');
			$table->integer('tourname')->nullable()->default('NULL');
			$table->boolean('status')->default(1);
			$table->integer('entry_by');
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
		Schema::drop('transfers_departure');
	}

}
