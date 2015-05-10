<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDependentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dependents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('name');
			$table->integer('relationship');
			$table->date('birthdate');
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
		Schema::drop('dependents');
	}

}
