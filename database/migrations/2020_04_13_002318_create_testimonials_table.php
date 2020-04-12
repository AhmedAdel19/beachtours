<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestimonialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('testimonials', function(Blueprint $table)
		{
			$table->increments('testimonialID');
			$table->string('namesurname', 200)->nullable()->default('NULL');
			$table->string('email', 200)->nullable()->default('NULL');
			$table->string('country', 200)->nullable()->default('NULL');
			$table->string('tour_name', 200)->nullable()->default('NULL');
			$table->date('tour_date')->nullable()->default('NULL');
			$table->string('image', 200)->nullable()->default('NULL');
			$table->text('testimonial')->nullable()->default('NULL');
			$table->integer('status')->nullable()->default(0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('testimonials');
	}

}
