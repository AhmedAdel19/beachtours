<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefOptionalToursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_optional_tours', function(Blueprint $table)
		{
			$table->integer('optionaltourID', true);
			$table->string('optional_tour', 200);
			$table->integer('currencyID');
			$table->integer('price');
			$table->text('description', 16777215);
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
		Schema::drop('def_optional_tours');
	}

}
