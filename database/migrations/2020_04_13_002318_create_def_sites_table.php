<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefSitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_sites', function(Blueprint $table)
		{
			$table->integer('siteID', true);
			$table->string('site_name', 200)->default('\'\'');
			$table->integer('countryID');
			$table->integer('cityID');
			$table->integer('admissionfee')->default(0);
			$table->integer('parkingfee_car')->default(0);
			$table->integer('parkingfee_minibus')->default(0);
			$table->integer('parkingfee_bus')->default(0);
			$table->integer('currencyID')->default(1);
			$table->text('description', 16777215)->nullable()->default('NULL');
			$table->string('image', 200)->nullable()->default('NULL');
			$table->integer('featured')->nullable()->default(0);
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
		Schema::drop('def_sites');
	}

}
