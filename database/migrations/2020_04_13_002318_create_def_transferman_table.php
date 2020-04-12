<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefTransfermanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_transferman', function(Blueprint $table)
		{
			$table->integer('transfermanID', true);
			$table->string('namesurname', 100)->default('\'\'');
			$table->string('email', 100)->unique('email');
			$table->string('mobilephone', 50)->default('\'\'');
			$table->text('notes', 65535)->nullable()->default('NULL');
			$table->string('img', 100)->nullable()->default('NULL');
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
		Schema::drop('def_transferman');
	}

}
