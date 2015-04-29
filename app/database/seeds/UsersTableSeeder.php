<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->truncate();

		User::create(array(
	        'email' => 'admin@hrswift.com',
	        'username' => 'admin',
	        'password' => Hash::make('hrswiftadmin123'),
	        'api_key' => Hash::make('admin'.date('Y-m-d h:i:s')),
	        //'token' => md5(base64_encode('admin:hrswiftadmin123')),
	        'activated_at' => date('Y-m-d h:i:s'),
	        'activated' => 1,
	    ));

	   User::create(array(
	        'email' => 'user@hrswift.com',
	        'username' => 'user',
	        'password' => Hash::make('hrswiftuser123'),
	        'api_key' => Hash::make('user'.date('Y-m-d h:i:s')),
	        //'token' => md5(base64_encode('user:hrswiftuser123')),
	        'activated_at' => date('Y-m-d h:i:s'),
	        'activated' => 1,
	    ));

	    User::create(array(
	        'email' => 'developer@hrswift.com',
	        'username' => 'developer',
	        'password' => Hash::make('hrswiftdev123'),
	        'api_key' => Hash::make('developer'.date('Y-m-d h:i:s')),
	        //'token' => md5(base64_encode('developer:hrswiftdev123')),
	        'activated_at' => date('Y-m-d h:i:s'),
	        'activated' => 1,
	    ));
	}

}