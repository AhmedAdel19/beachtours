<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuidesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guides', function(Blueprint $table)
		{
			$table->integer('guideID', true);
			$table->string('name', 100)->default('\'\'');
			$table->string('email', 100);
			$table->string('password', 100);
			$table->string('mobilephone', 100)->default('\'\'');
			$table->text('address', 16777215)->nullable()->default('NULL');
			$table->string('license_no', 100);
			$table->string('languageID', 100)->default('\'\'');
			$table->string('image', 300)->nullable()->default('NULL');
			$table->text('CV')->nullable()->default('NULL');
			$table->integer('cityID')->nullable()->default('NULL');
			$table->integer('countryID')->nullable()->default('NULL');
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
		Schema::drop('guides');
	}

}
