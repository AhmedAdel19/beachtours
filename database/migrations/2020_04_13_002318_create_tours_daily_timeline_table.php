<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateToursDailyTimelineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tours_daily_timeline', function(Blueprint $table)
		{
			$table->increments('TimelineID');
			$table->integer('DtID')->nullable()->default('NULL');
			$table->string('Title')->nullable()->default('NULL');
			$table->string('Timestart', 11)->nullable()->default('NULL');
			$table->string('Timeend', 11)->nullable()->default('NULL');
			$table->integer('Icon')->nullable()->default('NULL');
			$table->text('Description', 65535)->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tours_daily_timeline');
	}

}
