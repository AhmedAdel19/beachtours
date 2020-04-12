<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_pages', function(Blueprint $table)
		{
			$table->integer('pageID', true);
			$table->string('title')->nullable()->default('NULL');
			$table->string('alias', 100)->nullable()->default('NULL');
			$table->text('note')->nullable()->default('NULL');
			$table->dateTime('created')->nullable()->default('NULL');
			$table->dateTime('updated')->nullable()->default('NULL');
			$table->string('filename', 50)->nullable()->default('NULL');
			$table->enum('status', array('enable','disable'))->nullable()->default('\'enable\'');
			$table->text('access', 65535)->nullable()->default('NULL');
			$table->enum('allow_guest', array('0','1'))->nullable()->default('\'0\'');
			$table->enum('template', array('frontend','backend'))->nullable()->default('\'frontend\'');
			$table->string('metakey')->nullable()->default('NULL');
			$table->text('metadesc', 65535)->nullable()->default('NULL');
			$table->enum('default', array('0','1'))->nullable()->default('\'0\'');
			$table->enum('pagetype', array('page','post'))->nullable()->default('NULL');
			$table->text('labels', 65535)->nullable()->default('NULL');
			$table->integer('views')->nullable()->default(0);
			$table->integer('userid')->nullable()->default('NULL');
			$table->string('image')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_pages');
	}

}
