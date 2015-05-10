<?php

class PersonalDetailsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('personal_details')->truncate();

		PersonalDetail::create(array(
	        'user_id' => 1,
	        'profile_picture' => storage_path().'/users/profile_picture.png',
	        'first_name' => 'Administrator',
	        'middle_name' => 'Administrator',
	        'last_name' => 'Administrator',
	        'nationality' => 'Filipino',
	        'birthdate' => date('Y-m-d'),
	        'marital_status' => 5,
	        'sex' => 3,
	    ));

	   PersonalDetail::create(array(
	        'user_id' => 2,
	        'profile_picture' => storage_path().'/users/profile_picture.png',
	        'first_name' => 'User',
	        'middle_name' => 'User',
	        'last_name' => 'User',
	        'nationality' => 'Filipino',
	        'birthdate' => date('Y-m-d'),
	        'marital_status' => 5,
	        'sex' => 3,
	       	'blood_type' => 'o',
	        'hobbies' => 'playing basketball'
	    ));

	    PersonalDetail::create(array(
	        'user_id' => 3,
	        'profile_picture' => storage_path().'/users/profile_picture.png',
	        'first_name' => 'Developer',
	        'middle_name' => 'Developer',
	        'last_name' => 'Developer',
	        'nationality' => 'Filipino',
	        'birthdate' => date('Y-m-d'),
	        'marital_status' => 5,
	        'sex' => 3,
	        'blood_type' => 'o',
	        'hobbies' => 'playing volleyball'
	    ));
	}

}