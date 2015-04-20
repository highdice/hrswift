<?php

class Helpers {
    public static function accessLevel() {
        $result = json_decode(UserGroup::getUserGroup(Auth::user()->id), true);

        if($result) {
        	switch($result[0]['group_id']) {
        		case 1:
        			return 'admin';
        		case 2:
        			return 'user';
        		case 3:
        			return 'developer';
        		break;
        	}
        }
    }
}