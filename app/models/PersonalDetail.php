<?php

class PersonalDetail extends \Eloquent {
	
	protected $fillable = [];

	protected $table = 'personal_details';

	public static function getAll($user_id) {
        return User::leftJoin('personal_details', function($join) {
				      $join->on('users.id', '=', 'personal_details.user_id');
				    })
        			->where('users.id', '=', $user_id)
                	->get([
				        'users.id',
				        'personal_details.first_name',
				        'personal_details.middle_name',
				        'personal_details.last_name',
				        'personal_details.nationality',
				        'personal_details.birthdate',
				        'personal_details.marital_status',
				        'personal_details.sex'
				    ]);
	}
}