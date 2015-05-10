<?php

class JobDetail extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'job_details';

	protected $fillable = [];

	public static function getAll($user_id) {
        return User::leftJoin('job_details', function($join) {
				      $join->on('users.id', '=', 'job_details.user_id');
				    })
        			->where('users.id', '=', $user_id)
                	->get([
				        'users.id',
				        'job_details.joined_date',
				        'job_details.contract_end_date',
				        'job_details.probation_date',
				        'job_details.permanency_date',
				        'job_details.job_title',
				        'job_details.employment_status',
				        'job_details.job_specification',
				        'job_details.work_shift',
				        'job_details.department',
				        'job_details.comment',
				        'job_details.contract_path'
				    ]);
	}
}