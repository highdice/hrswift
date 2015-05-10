<?php

class ContactDetailsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('contact_details')->truncate();

		ContactDetail::create(array(
	        'user_id' => 1,
	        'address' => 'Eastwood',
	        'municipality' => 'Libis',
	        'city' => 'Quezon City',
	        'zip' => 1110,
	        'country' => 236,
	        'home_telephone' => '9100000',
	        'work_telephone' => '9100000',
	        'mobile' => '09991231234',
	        'personal_email' => 'admin@gmail.com'
	    ));

	   ContactDetail::create(array(
	        'user_id' => 2,
	        'address' => 'Eastwood',
	        'municipality' => 'Libis',
	        'city' => 'Quezon City',
	        'zip' => 1110,
	        'country' => 236,
	        'home_telephone' => '9100000',
	        'work_telephone' => '9100000',
	        'mobile' => '09991231234',
	        'personal_email' => 'user@gmail.com'
	    ));

	    ContactDetail::create(array(
	        'user_id' => 3,
	        'address' => 'Eastwood',
	        'municipality' => 'Libis',
	        'city' => 'Quezon City',
	        'zip' => 1110,
	        'country' => 236,
	        'home_telephone' => '9100000',
	        'work_telephone' => '9100000',
	        'mobile' => '09991231234',
	        'personal_email' => 'developer@gmail.com'
	    ));
	}

}