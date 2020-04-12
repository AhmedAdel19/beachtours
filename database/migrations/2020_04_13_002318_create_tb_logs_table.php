<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_logs', function(Blueprint $table)
		{
			$table->integer('auditID', true);
			$table->string('ipaddress', 50)->nullable()->default('NULL');
			$table->integer('user_id')->nullable()->default('NULL');
			$table->string('module', 50)->nullable()->default('NULL');
			$table->string('task', 50)->nullable()->default('NULL');
			$table->text('note', 65535)->nullable()->default('NULL');
			$table->dateTime('logdate')->default('current_timestamp()');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_logs');
	}

}
