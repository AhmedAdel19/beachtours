<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefPaymentTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_payment_types', function(Blueprint $table)
		{
			$table->increments('paymenttypeID');
			$table->string('payment_type', 20)->nullable()->default('NULL');
			$table->string('icon', 100)->nullable()->default('NULL');
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
		Schema::drop('def_payment_types');
	}

}
