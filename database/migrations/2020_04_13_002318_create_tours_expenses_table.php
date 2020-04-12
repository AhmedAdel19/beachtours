<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateToursExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tours_expenses', function(Blueprint $table)
		{
			$table->integer('tourexpenseID', true);
			$table->integer('tourID');
			$table->string('expensename', 300)->default('\'\'');
			$table->integer('cost');
			$table->integer('currency');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tours_expenses');
	}

}
