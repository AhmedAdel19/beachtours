<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbFormsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_forms', function(Blueprint $table)
		{
			$table->integer('formID', true);
			$table->string('name')->nullable()->default('NULL');
			$table->enum('method', array('eav','table','email'))->nullable()->default('\'table\'');
			$table->string('tablename', 50)->nullable()->default('NULL');
			$table->string('email', 225)->nullable()->default('NULL');
			$table->text('configuration')->nullable()->default('NULL');
			$table->text('success', 65535)->nullable()->default('NULL');
			$table->text('failed', 65535)->nullable()->default('NULL');
			$table->text('redirect', 65535)->nullable()->default('NULL');
			$table->integer('sendcopy')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_forms');
	}

}
