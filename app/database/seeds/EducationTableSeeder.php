<?php

class EducationTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('education')->truncate();

		Education::create(array(
	        'user_id' => 2,
	        'level' => 13,
	        'institute' => 'University of the Philippines',
			'program' => 'Information Technology',
	        'date_from' => '2008-04-01',
	        'date_to' => '2012-04-01',
	        'score' => 2,
	    ));

	    Education::create(array(
	        'user_id' => 3,
	        'level' => 13,
	        'institute' => 'STI College',
			'program' => 'Information Technology',
	        'date_from' => '2008-04-01',
	        'date_to' => '2012-04-01',
	        'score' => 1.75,
	    ));

	}

}