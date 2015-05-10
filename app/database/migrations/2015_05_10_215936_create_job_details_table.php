<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->date('joined_date');
			$table->date('contract_end_date');
			$table->date('probation_date');
			$table->date('permanency_date');
			$table->string('job_title');
			$table->integer('employment_status');
			$table->string('job_specification');
			$table->integer('work_shift');
			$table->integer('department');
			$table->text('comment');
			$table->text('contract_path');
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
		Schema::drop('job_details');
	}

}
