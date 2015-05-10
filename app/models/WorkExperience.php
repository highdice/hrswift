<?php

class WorkExperience extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'work_experience';

	protected $fillable = [];

	public static function getAll($user_id) {
        return User::leftJoin('work_experience', function($join) {
				      $join->on('users.id', '=', 'work_experience.user_id');
				    })
        			->where('users.id', '=', $user_id)
                	->get([
				        'users.id',
				        'work_experience.company',
				        'work_experience.address',
				        'work_experience.job_title',
				        'work_experience.date_from',
				        'work_experience.date_to',
				        'work_experience.comment',
				    ]);
	}
	
}