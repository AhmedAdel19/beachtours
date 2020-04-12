<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_menu', function(Blueprint $table)
		{
			$table->integer('menu_id', true);
			$table->integer('parent_id')->nullable()->default(0);
			$table->string('module', 50)->nullable()->default('NULL');
			$table->string('url', 100)->nullable()->default('NULL');
			$table->string('menu_name', 100)->nullable()->default('NULL');
			$table->char('menu_type', 10)->nullable()->default('NULL');
			$table->string('role_id', 100)->nullable()->default('NULL');
			$table->smallInteger('deep')->nullable()->default('NULL');
			$table->integer('ordering')->nullable()->default('NULL');
			$table->enum('position', array('top','sidebar','both','settingbar','definitions'))->nullable()->default('NULL');
			$table->string('menu_icons', 50)->nullable()->default('NULL');
			$table->enum('active', array('0','1'))->nullable()->default('\'1\'');
			$table->text('access_data', 65535)->nullable()->default('NULL');
			$table->enum('allow_guest', array('0','1'))->nullable()->default('\'0\'');
			$table->text('menu_lang', 65535)->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_menu');
	}

}
