<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function getAll() {
        return User::orderBy('id','desc')
                        ->get([
                        	'id',
                        	'username',
                        	'email',
                        ]);
	}

	public static function getSingle($id) {
		$data = User::where('id', '=', $id)
						->orderBy('id','desc')
                        ->first([
                        	'id',
                        	'username',
                        	'email',
                        ]);

        array_add($data, 'company', Config::get('config.company'));
        array_add($data, 'address', Config::get('config.address'));

        return $data;
	}

	public static function authenticateUser($id) {
		return User::where('id', '=', $id)
						->orderBy('id','desc')
                        ->first([
                        	'id',
                        	'username',
                        	'email',
                        	'api_key'
                        ]);
	}

}
