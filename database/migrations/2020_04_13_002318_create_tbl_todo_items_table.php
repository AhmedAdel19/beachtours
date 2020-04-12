<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblTodoItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_todo_items', function(Blueprint $table)
		{
			$table->integer('ItemID', true);
			$table->integer('TaskID')->nullable()->default('NULL');
			$table->string('Name')->nullable()->default('NULL');
			$table->integer('Status')->nullable()->default('NULL');
			$table->dateTime('createdOn')->nullable()->default('current_timestamp()');
			$table->dateTime('updatedOn')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_todo_items');
	}

}
