<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTravellersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('travellers', function(Blueprint $table)
		{
			$table->integer('travellerID', true);
			$table->string('nameandsurname', 100)->nullable()->default('\'\'');
			$table->string('email', 100)->default('\'\'');
			$table->string('phone', 100)->nullable()->default('\'\'');
			$table->text('address')->nullable()->default('NULL');
			$table->string('city', 200)->nullable()->default('NULL');
			$table->integer('countryID')->nullable()->default('NULL');
			$table->date('dateofbirth')->nullable()->default('NULL');
			$table->string('passportno', 30)->nullable()->default('NULL');
			$table->date('passportissue')->nullable()->default('NULL');
			$table->date('passportexpiry')->nullable()->default('NULL');
			$table->integer('passportcountry')->nullable()->default('NULL');
			$table->integer('bedconfiguration')->nullable()->default('NULL');
			$table->string('dietaryrequirements', 100)->nullable()->default('NULL');
			$table->string('emergencycontactname', 100)->nullable()->default('NULL');
			$table->string('emergencycontanphone', 100)->nullable()->default('NULL');
			$table->string('emergencycontactemail', 100)->nullable()->default('NULL');
			$table->string('insurancecompany', 100)->nullable()->default('NULL');
			$table->string('insurancecompanyphone', 100)->nullable()->default('NULL');
			$table->string('insurancepolicyno', 100)->nullable()->default('NULL');
			$table->string('interests', 400)->nullable()->default('NULL');
			$table->string('image', 200)->nullable()->default('\'no-profile-image.jpg\'');
			$table->boolean('status')->nullable()->default(1);
			$table->integer('entry_by')->nullable()->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('travellers');
	}

}
