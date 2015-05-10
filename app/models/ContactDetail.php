<?php

class ContactDetail extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contact_details';

	protected $fillable = [];

	public static function getAll($user_id) {
        return User::leftJoin('contact_details', function($join) {
				      $join->on('users.id', '=', 'contact_details.user_id');
				    })
        			->where('users.id', '=', $user_id)
                	->get([
				        'users.id',
				        'contact_details.address',
				        'contact_details.municipality',
				        'contact_details.city',
				        'contact_details.zip',
				        'contact_details.country',
				        'contact_details.home_telephone',
				        'contact_details.work_telephone',
				        'contact_details.mobile',
				        'contact_details.personal_email'
				    ]);
	}

	public static function updateSingle($user_id, $data) {
		return User::where('user_id', '=', $user_id)
            ->update($data);
	}
}