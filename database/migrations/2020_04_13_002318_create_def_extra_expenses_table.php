<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefExtraExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_extra_expenses', function(Blueprint $table)
		{
			$table->integer('expenseID', true);
			$table->string('extra_expenses', 200);
			$table->integer('cost');
			$table->string('currencyID', 200)->default('\'\'');
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
		Schema::drop('def_extra_expenses');
	}

}
