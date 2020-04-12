<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefSupplierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('def_supplier', function(Blueprint $table)
		{
			$table->integer('supplierID', true);
			$table->string('name', 200)->nullable()->default('NULL');
			$table->string('email', 100)->nullable()->default('NULL')->unique('email');
			$table->string('phone', 50)->nullable()->default('NULL');
			$table->text('address', 16777215)->nullable()->default('NULL');
			$table->integer('suppliertypeID')->nullable()->default('NULL');
			$table->integer('cityID')->nullable()->default('NULL');
			$table->integer('countryID')->nullable()->default('NULL');
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
		Schema::drop('def_supplier');
	}

}
