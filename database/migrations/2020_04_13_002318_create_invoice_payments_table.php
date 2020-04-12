<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_payments', function(Blueprint $table)
		{
			$table->increments('invoicePaymentID');
			$table->integer('travellerID')->nullable()->default('NULL');
			$table->integer('invoiceID')->nullable()->default('NULL');
			$table->integer('amount')->nullable()->default('NULL');
			$table->integer('currency')->nullable()->default('NULL');
			$table->integer('payment_type')->nullable()->default('NULL');
			$table->date('payment_date')->nullable()->default('NULL');
			$table->text('notes', 65535)->nullable()->default('NULL');
			$table->integer('entry_by')->nullable()->default('NULL');
			$table->timestamps();
			$table->integer('received')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoice_payments');
	}

}
