<?php

class UserGroupsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('user_groups')->truncate();

		UserGroup::create(array(
	        'user_id' => 1,
	        'group_id' => 1,
	    ));

	    UserGroup::create(array(
	        'user_id' => 2,
	        'group_id' => 2,
	    ));

	    UserGroup::create(array(
	        'user_id' => 3,
	        'group_id' => 3,
	    ));
	}

}