<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTravelAgentAgentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travel_agent_agent', function(Blueprint $table)
		{
			$table->increments('agentID');
			$table->integer('travel_agency')->nullable()->default('NULL');
			$table->string('agent_name', 200)->nullable()->default('NULL');
			$table->string('agent_code', 200)->nullable()->default('NULL');
			$table->string('email', 200)->nullable()->default('NULL');
			$table->string('phone', 200)->nullable()->default('NULL');
			$table->string('location', 200)->nullable()->default('NULL');
			$table->integer('status')->nullable()->default('NULL');
			$table->timestamps();
			$table->integer('entry_by')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('travel_agent_agent');
	}

}
