<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTourDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tour_detail', function(Blueprint $table)
		{
			$table->integer('tourdetailID', true);
			$table->integer('tourID');
			$table->integer('day');
			$table->integer('countryID');
			$table->integer('cityID');
			$table->integer('hotelID');
			$table->string('siteID', 200)->nullable()->default('NULL');
			$table->string('meal', 200)->nullable()->default('\'\'');
			$table->string('optionaltourID', 200)->nullable()->default('NULL');
			$table->string('title', 200)->nullable()->default('NULL');
			$table->text('description')->nullable()->default('NULL');
			$table->string('icon', 200)->nullable()->default('\'fa-circle-o-notch\'');
			$table->string('image', 200)->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tour_detail');
	}

}
