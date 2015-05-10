<?php

class Education extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'education';

	protected $fillable = [];

	public static function getAll($user_id) {
        return User::leftJoin('education', function($join) {
				      $join->on('users.id', '=', 'education.user_id');
				    })
        			->where('users.id', '=', $user_id)
                	->get([
				        'users.id',
				        'education.level',
				        'education.institute',
				        'education.program',
				        'education.date_from',
				        'education.date_to',
				        'education.score'
				    ]);
	}
}