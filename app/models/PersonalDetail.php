<?php

class PersonalDetail extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'personal_details';
	
	protected $fillable = [];

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
				        'personal_details.sex',
				        'personal_details.blood_type',
				        'personal_details.hobbies'
				    ]);
	}

	public static function updateSingle($user_id, $data) {
		return User::where('user_id', '=', $user_id)
            ->update($data);
	}
}