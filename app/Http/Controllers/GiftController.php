<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;
use App\Gift;
use Illuminate\Support\Facades\Auth;

class GiftController extends Controller
{
	public function index()
	{
		$gift = new Gift();
		return response()->json($gift->get());
	}

	public function show($id)
	{
		return response()->json(Gift::find($id));
	}
	public function store(Request $request)
	{
		$gift = new Gift();
		$gift->create($request->all());
		return response()->json($gift);


		/*$gift = Gift::project();
		$this->validate($request, [
			'title' => 'required',
		]);

		$gift->gifts()->create($request->all());
		return response()->json($gift);*/

	}
	public function update(Request $request, $id)
	{
		$gift = new Gift();
		$gift->findOrFail($id)->update($request->all());
		/*$gift->update($request->all());*/
		return response()->json($gift);
	}
	public function delete($id)
	{
		$gift = new Gift();
		$gift->findOrFail($id)->delete();
		/*$gift->delete();*/
		return response()->json(null);
	}
}
