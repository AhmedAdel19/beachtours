<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTodoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todo', function(Blueprint $table)
		{
			$table->integer('todoID', true);
			$table->text('todo', 65535)->nullable()->default('NULL');
			$table->date('duedate')->nullable()->default('NULL');
			$table->integer('assignedto')->nullable()->default('NULL');
			$table->dateTime('createdOn')->nullable()->default('current_timestamp()');
			$table->dateTime('updatedOn')->nullable()->default('NULL');
			$table->integer('Status')->nullable()->default('NULL');
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
		Schema::drop('todo');
	}

}
