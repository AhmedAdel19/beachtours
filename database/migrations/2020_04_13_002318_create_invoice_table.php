<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice', function(Blueprint $table)
		{
			$table->increments('invoiceID');
			$table->integer('travellerID')->nullable()->default('NULL');
			$table->string('bookingID', 11)->nullable()->default('NULL');
			$table->decimal('InvTotal', 10, 0)->nullable()->default('NULL');
			$table->decimal('Subtotal', 10, 0)->nullable()->default('NULL');
			$table->integer('currency')->nullable()->default('NULL');
			$table->string('payment_type', 200)->nullable()->default('NULL');
			$table->text('notes', 65535)->nullable()->default('NULL');
			$table->date('DateIssued')->nullable()->default('NULL');
			$table->date('DueDate')->nullable()->default('NULL');
			$table->decimal('discount', 10, 0)->nullable()->default('NULL');
			$table->decimal('tax', 10, 0)->nullable()->default('NULL');
			$table->boolean('status')->nullable()->default(0);
			$table->integer('entry_by')->nullable()->default('NULL');
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
		Schema::drop('invoice');
	}

}
