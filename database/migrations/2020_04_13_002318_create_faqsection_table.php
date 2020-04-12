<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqsectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faqsection', function(Blueprint $table)
		{
			$table->integer('sectionID', true);
			$table->integer('faqID')->nullable()->default('NULL');
			$table->string('title', 100)->nullable()->default('NULL');
			$table->integer('orderID')->nullable()->default('NULL');
			$table->enum('default', array('0','1'))->nullable()->default('NULL');
			$table->text('note', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('faqsection');
	}

}
