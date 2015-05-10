<?php

class Dependent extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'dependents';

	protected $fillable = [];

	public static function getAll($user_id) {
        return User::leftJoin('dependents', function($join) {
				      $join->on('users.id', '=', 'dependents.user_id');
				    })
        			->where('users.id', '=', $user_id)
                	->get([
				        'users.id',
				        'dependents.name',
				        'dependents.relationship',
				        'dependents.birthdate'
				    ]);
	}
}