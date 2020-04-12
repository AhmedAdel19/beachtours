<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblTodoProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_todo_projects', function(Blueprint $table)
		{
			$table->integer('ProID', true);
			$table->string('ProTitle')->nullable()->default('NULL');
			$table->text('ProDesc', 65535)->nullable()->default('NULL');
			$table->string('ProUsers', 100)->nullable()->default('NULL');
			$table->date('ProDueDate')->nullable()->default('NULL');
			$table->integer('ProStatus')->nullable()->default(0);
			$table->dateTime('createdOn')->nullable()->default('current_timestamp()');
			$table->dateTime('updatedOn')->nullable()->default('NULL');
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
		Schema::drop('tbl_todo_projects');
	}

}
