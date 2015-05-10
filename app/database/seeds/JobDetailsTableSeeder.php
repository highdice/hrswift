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
	        'employment_status' => 15,
	        'work_shift' => 17,
	        'department' => 29,
	    ));

	    JobDetail::create(array(
	        'user_id' => 2,
	        'joined_date' => '2015-01-01',
	        'probation_date' => '2015-04-01',
	        'permanency_date' => '2015-07-01',
	        'job_title' => 'CEO',
	        'employment_status' => 12,
	        'work_shift' => 17,
	        'department' => 22,
	    ));

	    JobDetail::create(array(
	        'user_id' => 3,
	        'joined_date' => '2015-01-01',
	        'probation_date' => '2015-04-01',
	        'permanency_date' => '2015-07-01',
	        'job_title' => 'CEO',
	        'employment_status' => 12,
	        'work_shift' => 17,
	        'department' => 23,
	    ));

	}

}