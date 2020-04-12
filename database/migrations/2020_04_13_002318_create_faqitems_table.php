<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqitemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faqitems', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('sectionID')->nullable()->default('NULL');
			$table->string('question')->nullable()->default('NULL');
			$table->text('answer', 65535)->nullable()->default('NULL');
			$table->smallInteger('ordering')->nullable()->default(0);
			$table->integer('hint');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('faqitems');
	}

}
