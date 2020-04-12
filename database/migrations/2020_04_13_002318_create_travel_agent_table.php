<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTravelAgentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travel_agent', function(Blueprint $table)
		{
			$table->integer('travelagentID', true);
			$table->string('agency_name', 200)->default('\'\'');
			$table->string('legalname', 200)->nullable()->default('NULL');
			$table->string('agency_code', 200)->nullable()->default('NULL');
			$table->string('agency_licence_code', 200)->nullable()->default('NULL');
			$table->string('personincontact', 200)->nullable()->default('NULL');
			$table->string('mobilephone', 200)->nullable()->default('NULL');
			$table->string('email', 100)->unique('email');
			$table->string('website', 250)->nullable()->default('NULL');
			$table->string('agent_logo', 100);
			$table->string('phone', 20)->nullable()->default('\'\'');
			$table->string('fax', 20)->nullable()->default('\'\'');
			$table->integer('countryID');
			$table->integer('cityID');
			$table->text('address', 65535);
			$table->string('bankname', 200)->nullable()->default('NULL');
			$table->string('ibancode', 200)->nullable()->default('NULL');
			$table->string('holder_name', 200)->nullable()->default('NULL');
			$table->string('vatno', 200)->nullable()->default('NULL');
			$table->integer('commissionrate')->nullable()->default('NULL');
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
		Schema::drop('travel_agent');
	}

}
