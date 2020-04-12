<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('group_id')->nullable()->default('NULL');
			$table->string('username', 100);
			$table->string('password', 64);
			$table->string('email', 100);
			$table->string('first_name', 50)->nullable()->default('NULL');
			$table->string('last_name', 50)->nullable()->default('NULL');
			$table->string('avatar', 100)->nullable()->default('NULL');
			$table->boolean('active')->nullable()->default('NULL');
			$table->boolean('login_attempt')->nullable()->default(0);
			$table->dateTime('last_login')->nullable()->default('NULL');
			$table->timestamps();
			$table->string('reminder', 64)->nullable()->default('NULL');
			$table->string('activation', 50)->nullable()->default('NULL');
			$table->string('remember_token', 100)->nullable()->default('NULL');
			$table->integer('last_activity');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_users');
	}

}
