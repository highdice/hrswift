<?php

class ViewController extends \BaseController {

	public function __construct()
    {
        $this->baseController   = new BaseController();
    }

    public function login() 
	{
	    return View::make('sessions/login');
	}
	
	public function dashboard() 
	{
	    return View::make('dashboard');
	}

	public function leaves() 
	{
	    return View::make('leaves/index');
	}

	public function time() 
	{
	    return View::make('ptime/index');
	}

	public function my_information() 
	{
	    return View::make('my_information/index');
	}

	//API Documentation Views
	public function api_introduction() 
	{
	    return View::make('api_documentation/introduction');
	}

	public function api_authentication() 
	{
	    return View::make('api_documentation/authentication');
	}

	public function api_users() 
	{
	    return View::make('api_documentation/users');
	}

}



