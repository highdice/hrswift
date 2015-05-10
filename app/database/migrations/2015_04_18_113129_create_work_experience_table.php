<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkExperienceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_experience', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('company');
			$table->text('address');
			$table->string('job_title');
			$table->date('date_from');
			$table->date('date_to');
			$table->text('comment');
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
		Schema::drop('work_experience');
	}

}
