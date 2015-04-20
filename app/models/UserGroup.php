<?php

class UserGroup extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_groups';

	protected $fillable = [];

	public static function getUserGroup($user_id) {
		return UserGroup::where('user_id', '=', $user_id)
		 				->orderBy('id','desc')
                        ->get();
	}
}