<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaleRecordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_record', function(Blueprint $table)
		{
			$table->increments('saleID');
			$table->integer('tourID')->nullable()->default('NULL');
			$table->integer('tourdateID')->nullable()->default('NULL');
			$table->date('shopping_date')->nullable()->default('NULL');
			$table->integer('supplierID')->nullable()->default('NULL');
			$table->integer('amount')->nullable()->default('NULL');
			$table->integer('currencyID')->nullable()->default('NULL');
			$table->text('note')->nullable()->default('NULL');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sale_record');
	}

}
