<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('profile_picture');
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('nationality');
			$table->date('birthdate');
			$table->integer('marital_status');
			$table->integer('sex');
			$table->string('father_name');
			$table->string('father_contact');
			$table->string('mother_name');
			$table->string('mother_contact');
			$table->string('blood_type');
			$table->text('hobbies');
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
		Schema::drop('personal_details');
	}

}
