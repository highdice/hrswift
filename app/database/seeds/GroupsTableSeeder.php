<?php

class GroupsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('groups')->truncate();

		Group::create(array(
	        'name'        => 'User',
	        'permissions' => json_encode(array(
	            'admin' => 0,
	            'users' => 1,
	            'developer' => 0,
	        ))));

		Group::create(array(
	        'name'        => 'Admin',
	        'permissions' => json_encode(array(
	            'admin' => 1,
	            'users' => 1,
	            'developer' => 0,
	        ))));

		Group::create(array(
	        'name'        => 'Developer',
	        'permissions' => json_encode(array(
	            'admin' => 1,
	            'users' => 1,
	            'developer' => 1,
	        ))));
	}

}