<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_comments', function(Blueprint $table)
		{
			$table->integer('commentID', true);
			$table->integer('pageID')->nullable()->default('NULL');
			$table->integer('userID')->nullable()->default('NULL');
			$table->text('comments')->nullable()->default('NULL');
			$table->dateTime('posted')->nullable()->default('NULL');
			$table->integer('approved')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_comments');
	}

}
