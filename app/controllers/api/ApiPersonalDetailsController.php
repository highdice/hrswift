<?php

class ApiPersonalDetailsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /personalinformations
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
	 * GET /personalinformations/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /personalinformations
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /personalinformations/{id}
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
	 * GET /personalinformations/{id}/edit
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
	 * PUT /personalinformations/{id}
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
	 * DELETE /personalinformations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}