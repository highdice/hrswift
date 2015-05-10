<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('PersonalDetailsTableSeeder');
		$this->call('GroupsTableSeeder');
		$this->call('UserGroupsTableSeeder');
		$this->call('ContactDetailsTableSeeder');
		$this->call('WorkExperienceTableSeeder');
		$this->call('SkillsTableSeeder');
		$this->call('JobDetailsTableSeeder');
		$this->call('DependentsTableSeeder');
		$this->call('LookupTableSeeder');
	}

}
