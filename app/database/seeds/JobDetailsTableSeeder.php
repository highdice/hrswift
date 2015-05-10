<?php

class JobDetailsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('job_details')->truncate();

		JobDetail::create(array(
	        'user_id' => 1,
	        'joined_date' => '2015-01-01',
	        'probation_date' => '2015-04-01',
	        'permanency_date' => '2015-07-01',
	        'job_title' => 'CEO',
	        'employment_status' => 60,
	        'work_shift' => 62,
	        'department' => 74,
	    ));

	    JobDetail::create(array(
	        'user_id' => 2,
	        'joined_date' => '2015-01-01',
	        'probation_date' => '2015-04-01',
	        'permanency_date' => '2015-07-01',
	        'job_title' => 'CEO',
	        'employment_status' => 57,
	        'work_shift' => 62,
	        'department' => 67,
	    ));

	    JobDetail::create(array(
	        'user_id' => 3,
	        'joined_date' => '2015-01-01',
	        'probation_date' => '2015-04-01',
	        'permanency_date' => '2015-07-01',
	        'job_title' => 'CEO',
	        'employment_status' => 57,
	        'work_shift' => 62,
	        'department' => 68,
	    ));

	}

}