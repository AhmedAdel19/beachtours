<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTourDateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tour_date', function(Blueprint $table)
		{
			$table->integer('tourdateID', true);
			$table->integer('tourcategoriesID')->nullable()->default('NULL');
			$table->integer('tourID');
			$table->string('tour_code', 10);
			$table->date('start');
			$table->date('end');
			$table->integer('guideID');
			$table->integer('featured')->nullable()->default(0);
			$table->integer('definite_departure')->nullable()->default(0);
			$table->integer('total_capacity')->nullable()->default('NULL');
			$table->integer('currencyID')->nullable()->default('NULL');
			$table->integer('cost_single')->nullable()->default('NULL');
			$table->integer('cost_double')->nullable()->default('NULL');
			$table->integer('cost_triple')->nullable()->default('NULL');
			$table->integer('cost_child')->nullable()->default('NULL');
			$table->boolean('status')->nullable()->default('NULL');
			$table->text('remarks')->nullable()->default('NULL');
			$table->string('color', 10)->nullable()->default('\'#4c5667\'');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tour_date');
	}

}
