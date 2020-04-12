<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_groups', function(Blueprint $table)
		{
			$table->increments('group_id');
			$table->string('name', 20)->nullable()->default('NULL');
			$table->string('description', 100)->nullable()->default('NULL');
			$table->integer('level')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_groups');
	}

}
