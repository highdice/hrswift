<?php

class Lookup extends \Eloquent {
	protected $fillable = [];

	protected $table = 'lookup';

	public static function getAll($lookup_id) {
        return Lookup::where('id', '=', $lookup_id)
        				->get();
	}
}