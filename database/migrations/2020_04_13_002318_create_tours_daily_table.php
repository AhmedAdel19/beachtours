<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateToursDailyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tours_daily', function(Blueprint $table)
		{
			$table->integer('dailytourID', true);
			$table->string('dailytour_name', 200)->default('\'\'');
			$table->integer('tourcategoriesID');
			$table->text('tour_description')->nullable()->default('NULL');
			$table->integer('capacity')->nullable()->default('NULL');
			$table->integer('startsat')->nullable()->default('NULL');
			$table->integer('duration')->nullable()->default('NULL');
			$table->string('departs')->nullable()->default('NULL');
			$table->integer('cost_adult')->nullable()->default('NULL');
			$table->integer('cost_child')->nullable()->default('NULL');
			$table->integer('currency')->nullable()->default('NULL');
			$table->string('similartours', 200)->nullable()->default('NULL');
			$table->string('payment_options', 100)->nullable()->default('NULL');
			$table->integer('policyandterms')->nullable()->default('NULL');
			$table->string('inclusions', 200)->nullable()->default('\'\'');
			$table->timestamps();
			$table->integer('views')->nullable()->default(0);
			$table->string('tourimage')->nullable()->default('NULL');
			$table->string('gallery', 10000)->nullable()->default('NULL');
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
		Schema::drop('tours_daily');
	}

}
