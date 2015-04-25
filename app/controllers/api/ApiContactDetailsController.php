<?php

class ApiContactDetailsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /contactdetails
	 *
	 * @return Response
	 */
	public function index($user_id)
	{
		$data = ContactDetail::getAll($user_id);
		if($data) {
			return Response::json(array('status' => 200, 'message' => 'success', 'result' => $data), 200);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /contactdetails/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /contactdetails
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /contactdetails/{id}
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
	 * GET /contactdetails/{id}/edit
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
	 * PUT /contactdetails/{id}
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
	 * DELETE /contactdetails/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}