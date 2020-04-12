<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotels', function(Blueprint $table)
		{
			$table->increments('hotelID');
			$table->boolean('status')->nullable()->default('NULL');
			$table->string('hotel_name', 100)->nullable()->default('NULL');
			$table->text('hotel_description', 65535)->nullable()->default('NULL');
			$table->integer('hotelcategoryID')->nullable()->default('NULL');
			$table->integer('hoteltypeID')->nullable()->default('NULL');
			$table->integer('countryID');
			$table->integer('cityID');
			$table->string('hotel_email', 100)->nullable()->default('NULL')->unique('hotel_email');
			$table->string('web_site', 100)->nullable()->default('NULL');
			$table->integer('hotel_phone')->nullable()->default('NULL');
			$table->integer('hotel_fax')->nullable()->default('NULL');
			$table->text('address', 65535)->nullable()->default('NULL');
			$table->string('person_in_contact', 100)->nullable()->default('\'\'');
			$table->integer('contact_phone')->nullable()->default('NULL');
			$table->string('contact_email', 100)->nullable()->default('NULL');
			$table->string('facilities', 100)->nullable()->default('\'\'');
			$table->integer('checkin')->nullable()->default(62);
			$table->integer('checkout')->nullable()->default(54);
			$table->string('paymentoptions', 100)->nullable()->default('\'\'');
			$table->text('policyandterms')->nullable()->default('NULL');
			$table->string('similarhotels', 100)->nullable()->default('NULL');
			$table->string('tripadvisor', 200)->nullable()->default('NULL');
			$table->string('facebook', 200)->nullable()->default('NULL');
			$table->string('twitter', 200)->nullable()->default('NULL');
			$table->string('instagram', 200)->nullable()->default('NULL');
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
		Schema::drop('hotels');
	}

}
