<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_tickets', function(Blueprint $table)
		{
			$table->integer('TicketID', true);
			$table->integer('UserID')->nullable()->default('NULL');
			$table->string('Title')->nullable()->default('NULL');
			$table->integer('Category')->nullable()->default('NULL');
			$table->integer('Priority')->nullable()->default(0);
			$table->text('Description', 65535)->nullable()->default('NULL');
			$table->string('Image')->nullable()->default('NULL');
			$table->enum('Status', array('Pending','Processed','Completed','New'))->nullable()->default('\'New\'');
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
		Schema::drop('tbl_tickets');
	}

}
