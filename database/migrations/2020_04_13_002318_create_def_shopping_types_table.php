<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefShoppingTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_shopping_types', function(Blueprint $table)
		{
			$table->increments('shoppingtypeID');
			$table->string('shopping_type', 100)->nullable()->default('NULL');
			$table->boolean('status')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('def_shopping_types');
	}

}
