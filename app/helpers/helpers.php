<?php

class Helpers {
    public static function response($status, $result = null, $error = null) {
        $data = array();
        $data['status'] = $status;

        switch($status) {
            case 200:
                $data['message'] = 'Success';
                $data['result'] = $result;
            break;
            case 400:
                $data['message'] = 'Bad Request';
                $data['error'] = $error;
            break;
            case 401:
                $data['message'] = 'Unauthorized';
            break;
            case 403:
                $data['message'] = 'Forbidden';
            break;
            case 404:
                $data['message'] = 'Not Found';
            break;
            case 405:
                $data['message'] = 'Method Not Allowed';
            break;
        }

        $response = Response::json($data, $status);
        $response->header('Content-Type', 'application/json');
        return $response;
    }

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