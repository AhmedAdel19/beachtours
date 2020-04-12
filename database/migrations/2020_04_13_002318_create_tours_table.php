<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateToursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tours', function(Blueprint $table)
		{
			$table->integer('tourID', true);
			$table->string('tour_name', 200);
			$table->integer('tourcategoriesID');
			$table->text('tour_description')->nullable()->default('NULL');
			$table->integer('total_days')->nullable()->default('NULL');
			$table->integer('total_nights')->nullable()->default('NULL');
			$table->integer('departs')->nullable()->default('NULL');
			$table->integer('featured')->nullable()->default(0);
			$table->integer('time')->nullable()->default('NULL');
			$table->integer('multicountry')->nullable()->default(0);
			$table->integer('countryID')->nullable()->default('NULL');
			$table->string('similartours', 200)->nullable()->default('NULL');
			$table->boolean('status');
			$table->string('payment_options', 100)->nullable()->default('NULL');
			$table->integer('policyandterms')->nullable()->default('NULL');
			$table->string('inclusions', 200)->nullable()->default('\'\'');
			$table->timestamps();
			$table->integer('views')->nullable()->default(0);
			$table->string('tourimage')->nullable()->default('NULL');
			$table->string('gallery', 10000)->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tours');
	}

}
