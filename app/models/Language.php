<?php

class Language extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'language';

	protected $fillable = [];

	public static function getAll($user_id) {
        return User::leftJoin('language', function($join) {
				      $join->on('users.id', '=', 'language.user_id');
				    })
        			->where('users.id', '=', $user_id)
                	->get([
				        'users.id',
				        'language.language',
				        'language.fluency_level',
				        'language.comments'
				    ]);
	}
}