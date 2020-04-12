<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefCurrencyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_currency', function(Blueprint $table)
		{
			$table->increments('currencyID');
			$table->string('symbol', 10)->nullable()->default('NULL');
			$table->string('currency_name', 100)->nullable()->default('NULL');
			$table->string('currency_sym', 100)->nullable()->default('NULL');
			$table->string('country', 100)->nullable()->default('NULL');
			$table->boolean('status')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('def_currency');
	}

}
