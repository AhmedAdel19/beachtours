<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTermsandconditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('termsandconditions', function(Blueprint $table)
		{
			$table->increments('tandcID');
			$table->text('title', 65535)->nullable()->default('NULL');
			$table->text('tandc')->nullable()->default('NULL');
			$table->timestamps();
			$table->integer('status')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('termsandconditions');
	}

}
