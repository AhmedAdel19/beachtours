<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuideNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guide_notes', function(Blueprint $table)
		{
			$table->increments('guidenotesID');
			$table->integer('guideID')->nullable()->default('NULL');
			$table->text('title', 65535)->nullable()->default('NULL');
			$table->text('note')->nullable()->default('NULL');
			$table->string('style', 200)->nullable()->default('NULL');
			$table->timestamps();
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
		Schema::drop('guide_notes');
	}

}
