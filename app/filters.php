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
		
	    //$auth = base64_encode('admin:hrswiftadmin123');
	    
	    $auth = Request::header('Authorization');

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
		    	return Helpers::response(200, $result);
		    } else {
		        // validation not successful, send back to form 
		    	return Helpers::response(401);
		    }
		}
		else {
			return Helpers::response(401);
		}
	}
	catch (Exception $e) {
    	return Helpers::response(401);
  	}
});

Route::filter('auth.api', function()
{
  
  /*
  $username = 'developer';
  $user_id = base64_encode(3);
  $api_key = '$2y$10$Y2ut5N7MUyhTdWZ.8veIueSe2yC6khoVVxRFLn.HTNwBIJXtYMeBm';
  */

  try {
  	
  	/*
  	$user_id = base64_decode($user_id);
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
      	//success
      }
      else {
          return Helpers::response(401);
      }
    }
    else {
      	return Helpers::response(401);
    }
  }
  catch (Exception $e) {
    	return Helpers::response(401);
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
