<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->text('address');
			$table->string('municipality');
			$table->string('city');
			$table->integer('zip');
			$table->integer('country');
			$table->string('home_telephone');
			$table->string('work_telephone');
			$table->string('mobile');
			$table->string('personal_email');
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
		Schema::drop('contact_details');
	}

}
