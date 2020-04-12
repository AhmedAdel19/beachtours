<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransfersArrivalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transfers_arrival', function(Blueprint $table)
		{
			$table->integer('transfer_arrivalID', true);
			$table->integer('arrivalcountry')->nullable()->default('NULL');
			$table->integer('arrivalcity')->nullable()->default('NULL');
			$table->dateTime('arrivaldate')->nullable()->default('NULL');
			$table->integer('arrivalairport')->nullable()->default('NULL');
			$table->string('arrivalflightno', 10)->nullable()->default('NULL');
			$table->dateTime('transfer_date')->nullable()->default('NULL');
			$table->integer('transfer_man')->nullable()->default('NULL');
			$table->text('arrival_note', 65535)->nullable()->default('NULL');
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
		Schema::drop('transfers_arrival');
	}

}
