<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function(Blueprint $table)
		{
			$table->increments('reviewID');
			$table->integer('tourID')->nullable()->default('NULL');
			$table->integer('travellerID')->nullable()->default('NULL');
			$table->integer('overall_experience')->nullable()->default('NULL');
			$table->integer('destinations_visited')->nullable()->default('NULL');
			$table->integer('td_knowledge')->nullable()->default('NULL');
			$table->integer('td_customer_service')->nullable()->default('NULL');
			$table->integer('td_communication')->nullable()->default('NULL');
			$table->integer('driver_courteous')->nullable()->default('NULL');
			$table->integer('driver_ability')->nullable()->default('NULL');
			$table->integer('coach_cleanliness')->nullable()->default('NULL');
			$table->integer('coach_comfort')->nullable()->default('NULL');
			$table->integer('sightseeing')->nullable()->default('NULL');
			$table->integer('local_experts')->nullable()->default('NULL');
			$table->integer('optionals')->nullable()->default('NULL');
			$table->integer('breakfast')->nullable()->default('NULL');
			$table->integer('welcome_dinner')->nullable()->default('NULL');
			$table->integer('hotel_dinners')->nullable()->default('NULL');
			$table->integer('accom_quality')->nullable()->default('NULL');
			$table->integer('accom_location')->nullable()->default('NULL');
			$table->text('your_comments', 65535)->nullable()->default('NULL');
			$table->text('any_suggestions', 65535)->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reviews');
	}

}
