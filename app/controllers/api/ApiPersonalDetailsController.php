<?php

class ApiPersonalDetailsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /personal_details
	 *
	 * @return Response
	 */
	public function index($user_id)
	{
		$data = PersonalDetail::getAll($user_id);
		if($data) {
			return Response::json(array('status' => 200, 'message' => 'success', 'result' => $data), 200);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /personal_details/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /personal_details
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /personal_details/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($user_id, $personal_information_id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /personal_details/{id}/edit
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
	 * PUT /personal_details/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($user_id, $personal_details_id)
	{
		$data = Input::all();

		$rules = array(
		    'first_name' => 'required',
		    'last_name' => 'required',
		    'nationality' => 'required',
		    'birthdate' => 'required|date_format:Y-m-d',
		    'marital_status' => 'required|numeric',
		    'sex' => 'required|numeric'
		);

		$validator = Validator::make($data, $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		    $response = Response::json(array('status' => 400, 'message' => 'Bad Request', 'error' => $validator->messages()), 401);
        	$response->header('Content-Type', 'application/json');
    		return $response;
		} else {
		    
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /personal_details/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}