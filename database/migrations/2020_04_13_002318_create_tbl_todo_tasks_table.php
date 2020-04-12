<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblTodoTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_todo_tasks', function(Blueprint $table)
		{
			$table->integer('TaskID', true);
			$table->integer('ProID')->nullable()->default('NULL');
			$table->string('TaskName')->nullable()->default('NULL');
			$table->text('TaskDesc', 65535)->nullable()->default('NULL');
			$table->string('TaskUsers', 100)->nullable()->default('NULL');
			$table->date('TaskDueDate')->nullable()->default('NULL');
			$table->integer('TaskStatus')->nullable()->default(0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_todo_tasks');
	}

}
