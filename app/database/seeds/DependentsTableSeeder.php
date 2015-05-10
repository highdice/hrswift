<?php

class DependentsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('dependents')->truncate();

		Dependent::create(array(
	        'user_id' => 2,
	        'name' => 'John Doe',
	        'relationship' => 85,
	        'birthdate' => '1955-01-01',
	    ));

	    Dependent::create(array(
	        'user_id' => 3,
	        'name' => 'John Doe',
	        'relationship' => 85,
	        'birthdate' => '1955-01-01',
	    ));

	}

}