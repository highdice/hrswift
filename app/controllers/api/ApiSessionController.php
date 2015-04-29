<?php

class ApiSessionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
		    'username' => 'required',
		    'password' => 'required|alphaNum|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    return Redirect::guest('login')
		        ->withErrors($validator)
		        ->withInput(Input::except('password'));
		} else {
		    // create our user data for the authentication
		    $userdata = array(
		        'username' => Input::get('username'),
		        'password' => Input::get('password')
		    );

		    // attempt to do the login
		    if (Auth::attempt($userdata)) {
		        // validation successful!
		        return Redirect::home();
		    } else {        
		        // validation not successful, send back to form 
		    	$mismatch = 'Login credentials mismatch.';
            	return Redirect::guest('login')
            		->withErrors($validator)
            		->withInput(Input::except('password'))
                    ->with('mismatch', $mismatch);
		    }
		}
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
    	return Redirect::home();
	}

}