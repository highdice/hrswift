<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic('username');
});

Route::filter('auth.login', function($route, $request)
{
	try {
		/*
	    $auth = base64_encode('admin:hrswiftadmin123');
	    */
	    $auth = $request->header('Authorization');

	    if($auth) {
		    $data = base64_decode($auth);
		    $userdata = explode(':',$data);

			$userdata = array(
		        'username' => $userdata[0],
		        'password' => $userdata[1]
		    );

		    // attempt to do the login
		    if($attempt = Auth::attempt($userdata)) {
		    	$result = array('user_id' => Auth::id());

		    	// validation successful, return user ID
		    	$response = Response::json(array('status' => 200, 'message' => 'Success', 'result' => $result), 200);
		        $response->header('Content-Type', 'application/json');
		    	return $response;
		    } else {
		        // validation not successful, send back to form 
		    	$response = Response::json(array('status' => 401, 'message' => 'Unauthorized'), 401);
		        $response->header('Content-Type', 'application/json');
		    	return $response;
		    }
		}
		else {
			$response = Response::json(array('status' => 401, 'message' => 'Unauthorized'), 401);
	        $response->header('Content-Type', 'application/json');
	    	return $response;
		}
	}
	catch (Exception $e) {
    	$response = Response::json(array('status' => 401, 'message' => 'Unauthorized'), 401);
        $response->header('Content-Type', 'application/json');
    	return $response;
  	}
});

Route::filter('auth.api', function()
{
  /*
  $username = 'admin';
  $user_id = 1;
  $api_key = '$2y$10$.TFFe6UlwOyuKYJufzpIOOf087HsNmwU28viJGsxMiHRNb5RJICA.';
  */

  try {
  	/*
  	$user_id = $user_id;
  	$client_signature = hash_hmac("sha256", $username.$user_id, $api_key);
  	*/

	$user_id = Request::header('X-Public');
  	$client_signature = Request::header('X-Hash');

    //lookup user
    $user = User::authenticateUser($user_id);

    if($user) {
      //username
      $username = $user->username;
      //user api key
      $api_key = $user->api_key;
      //recreate signature
      $db_signature = hash_hmac("sha256", $username.$user_id, $api_key);
      if($db_signature === $client_signature) {
      	//
      }
      else {
          $response = Response::json(array('status' => 401, 'message' => 'Unauthorized'), 401);
          $response->header('Content-Type', 'application/json');
    	  return $response;
      }
    }
    else {
      	$response = Response::json(array('status' => 401, 'message' => 'Unauthorized'), 401);
        $response->header('Content-Type', 'application/json');
    	return $response;
    }
  }
  catch (Exception $e) {
    	$response = Response::json(array('status' => 401, 'message' => 'Unauthorized'), 401);
        $response->header('Content-Type', 'application/json');
    	return $response;
  }
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
