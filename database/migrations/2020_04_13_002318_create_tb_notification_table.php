<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_notification', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('userid')->nullable()->default('NULL');
			$table->string('url')->nullable()->default('NULL');
			$table->string('title')->nullable()->default('NULL');
			$table->text('note', 65535)->nullable()->default('NULL');
			$table->dateTime('created')->nullable()->default('NULL');
			$table->char('icon', 20)->nullable()->default('NULL');
			$table->enum('is_read', array('0','1'))->nullable()->default('\'0\'');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_notification');
	}

}
