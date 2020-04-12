<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblTicketsReplyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_tickets_reply', function(Blueprint $table)
		{
			$table->bigInteger('ReplyID', true);
			$table->integer('TicketID')->nullable()->default('NULL');
			$table->integer('UserID')->nullable()->default('NULL');
			$table->text('Comments', 65535)->nullable()->default('NULL');
			$table->dateTime('createdOn')->nullable()->default('NULL');
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
		Schema::drop('tbl_tickets_reply');
	}

}
