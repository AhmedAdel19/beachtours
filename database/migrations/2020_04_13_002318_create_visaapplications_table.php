<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVisaapplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visaapplications', function(Blueprint $table)
		{
			$table->increments('applicationID');
			$table->string('travellersID', 220)->nullable()->default('NULL');
			$table->integer('countryID')->nullable()->default('NULL');
			$table->integer('duration')->nullable()->default('NULL');
			$table->integer('duration2')->nullable()->default('NULL');
			$table->date('applicationdate')->nullable()->default('NULL');
			$table->integer('processintime')->nullable()->default('NULL');
			$table->integer('payment')->nullable()->default('NULL');
			$table->integer('currencyID')->nullable()->default('NULL');
			$table->integer('paymenttypeID')->nullable()->default('NULL');
			$table->integer('applicationfee')->nullable()->default('NULL');
			$table->integer('currencyID2')->nullable()->default('NULL');
			$table->string('documents')->nullable()->default('NULL');
			$table->integer('status')->nullable()->default('NULL');
			$table->date('visaexpirydate')->nullable()->default('NULL');
			$table->text('rejectreason', 65535)->nullable()->default('NULL');
			$table->text('remarks', 65535)->nullable()->default('NULL');
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
		Schema::drop('visaapplications');
	}

}
