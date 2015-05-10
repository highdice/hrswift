<?php

class WorkExperienceTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('work_experience')->truncate();

		WorkExperience::create(array(
	        'user_id' => 1,
	        'company' => 'hrswift',
	        'address' => 'Eastwood City, Libis',
	        'job_title' => 'Vice President',
	        'date_from' => '2014-01-01',
	        'date_to' => '2015-05-01'
	    ));

		WorkExperience::create(array(
	        'user_id' => 1,
	        'company' => 'hrswift',
	        'address' => 'Eastwood City, Libis',
	        'job_title' => 'CEO',
	        'date_from' => '2015-01-01',
	        'date_to' => '2015-05-10'
	    ));

	    WorkExperience::create(array(
	        'user_id' => 2,
	        'company' => 'hrswift',
	        'address' => 'Eastwood City, Libis',
	        'job_title' => 'Junior Software Engineer',
	        'date_from' => '2014-01-01',
	        'date_to' => '2015-05-01'
	    ));

	   WorkExperience::create(array(
	        'user_id' => 2,
	        'company' => 'hrswift',
	        'address' => 'Eastwood City, Libis',
	        'job_title' => 'Senior Software Engineer',
	        'date_from' => '2015-01-01',
	        'date_to' => '2015-05-10'
	    ));

	   WorkExperience::create(array(
	        'user_id' => 2,
	        'company' => 'hrswift',
	        'address' => 'Eastwood City, Libis',
	        'job_title' => 'Junior Software Engineer',
	        'date_from' => '2014-01-01',
	        'date_to' => '2015-05-01'
	    ));

	    WorkExperience::create(array(
	        'user_id' => 3,
	        'company' => 'hrswift',
	        'address' => 'Eastwood City, Libis',
	        'job_title' => 'Senior Software Engineer',
	        'date_from' => '2015-01-01',
	        'date_to' => '2015-05-10'
	    ));
	}

}