<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
		$user = Auth::user();

		$profile = $user->where('id', Auth::user()->id);
		return view('pages.profile', compact('profile'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
		$user = Auth::user();

		$this->validate($request,
			[
				'name' => 'required',
				'email' => 'required',
				'phone' => 'required'
			]);


		$user->create($request->all());
		return redirect()->to('/profile');
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$profile = Auth::findOrFail($id);
		return view('pages.profile', compact('profile'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

		$user = Auth::user();

		$this->validate($request,
			[
				'name' => 'required',
				'email' => 'required',
				'phone' => 'required'
			]);


		$user->update($request->all());
		return redirect()->to('/profile');



	}
}
