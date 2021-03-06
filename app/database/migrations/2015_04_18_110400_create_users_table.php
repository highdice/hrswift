<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('password');
			$table->string('api_key');
			$table->string('token');
			$table->dateTime('token_expiry');
			$table->string('remember_token');
			$table->integer('activated');
			$table->string('activation_code');
			$table->dateTime('activated_at');
			$table->dateTime('last_login');
			$table->string('persist_code');
			$table->string('reset_password_code');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
