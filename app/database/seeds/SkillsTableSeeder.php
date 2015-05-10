<?php

class SkillsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('skills')->truncate();

		Skill::create(array(
	        'user_id' => 1,
	        'skill' => 'Sales',
	        'years_experience' => '5'
	    ));

		Skill::create(array(
	        'user_id' => 1,
	        'skill' => 'Management',
	        'years_experience' => '5'
	    ));

	   Skill::create(array(
	        'user_id' => 2,
	        'skill' => 'Java',
	        'years_experience' => '3'
	    ));

	   Skill::create(array(
	        'user_id' => 3,
	        'skill' => 'PHP',
	        'years_experience' => '3'
	    ));

	    Skill::create(array(
	        'user_id' => 3,
	        'skill' => 'Javascript',
	        'years_experience' => '3'
	    ));
	}

}