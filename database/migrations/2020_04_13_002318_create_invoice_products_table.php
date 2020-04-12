<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_products', function(Blueprint $table)
		{
			$table->bigInteger('ItemID', true);
			$table->integer('InvID')->nullable()->default('NULL');
			$table->string('Code')->nullable()->default('NULL');
			$table->string('Items')->nullable()->default('NULL');
			$table->integer('Qty')->nullable()->default('NULL');
			$table->decimal('Amount', 10, 0)->nullable()->default('NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoice_products');
	}

}
