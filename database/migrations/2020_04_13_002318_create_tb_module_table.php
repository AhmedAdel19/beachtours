<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbModuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_module', function(Blueprint $table)
		{
			$table->integer('module_id', true);
			$table->string('module_name', 100)->nullable()->default('NULL');
			$table->string('module_title', 100)->nullable()->default('NULL');
			$table->string('module_note')->nullable()->default('NULL');
			$table->string('module_author', 100)->nullable()->default('NULL');
			$table->dateTime('module_created')->nullable()->default('NULL');
			$table->text('module_desc', 65535)->nullable()->default('NULL');
			$table->string('module_db')->nullable()->default('NULL');
			$table->string('module_db_key', 100)->nullable()->default('NULL');
			$table->enum('module_type', array('master','report','proccess','core','generic','addon','ajax'))->nullable()->default('\'master\'');
			$table->text('module_config')->nullable()->default('NULL');
			$table->text('module_lang', 65535)->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_module');
	}

}
