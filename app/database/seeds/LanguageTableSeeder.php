<?php

class LanguageTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('language')->truncate();

		Language::create(array(
	        'user_id' => 1,
	        'language' => 27,
	        'fluency_level' => 22,
	    ));

	    Language::create(array(
	        'user_id' => 1,
	        'language' => 45,
	        'fluency_level' => 22,
	    ));

	    Language::create(array(
	        'user_id' => 2,
	        'language' => 27,
	        'fluency_level' => 22,
	    ));

	    Language::create(array(
	        'user_id' => 2,
	        'language' => 45,
	        'fluency_level' => 22,
	    ));


	    Language::create(array(
	        'user_id' => 3,
	        'language' => 27,
	        'fluency_level' => 22,
	    ));

	    Language::create(array(
	        'user_id' => 3,
	        'language' => 45,
	        'fluency_level' => 22,
	    ));


	}

}