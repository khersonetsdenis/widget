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
		//dd($profile);
		return view('pages.profile', compact('profile'));

    	//return view('pages.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
    }

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		//
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


		/*$profile = Auth::findOrFail($id);
		dd($profile);
		$profile->user()->update($request->all());

		return response()->json($profile);
		/*return redirect()->to('/profile');*/

		/*$activity = Activity::find($request->id);
		$activity->cluster_id = $request->cluster_id;
		$activity->group_id = $request->group_id;
		$activity->school_id = $request->school_id;
		$activity->save();
		return response()->json();*/


	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
