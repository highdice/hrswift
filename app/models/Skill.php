<?php

class Skill extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'skills';

	protected $fillable = [];

	public static function getAll($user_id) {
        return User::leftJoin('skills', function($join) {
				      $join->on('users.id', '=', 'skills.user_id');
				    })
        			->where('users.id', '=', $user_id)
                	->get([
				        'users.id',
				        'skills.skill',
				        'skills.years_experience',
				        'skills.comment',
				    ]);
	}
}