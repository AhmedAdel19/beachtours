<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefCarBrandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_car_brands', function(Blueprint $table)
		{
			$table->increments('carbrandID');
			$table->string('brand', 200)->nullable()->default('NULL');
			$table->text('description', 65535)->nullable()->default('NULL');
			$table->integer('status')->nullable()->default('NULL');
			$table->string('logo')->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('def_car_brands');
	}

}
