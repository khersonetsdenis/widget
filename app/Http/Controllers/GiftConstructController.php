<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GiftConstructController extends Controller
{

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
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
		$gifts = $user->gifts()->get();
		return view('gift-construct', compact('gifts'));
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

		$this->validate($request, [
			'headline_btn' => '',
			'background_btn' => '',
			'color_gift_btn' => '',
			'headline_stap_one' => '',
			'background_stap_one' => '',
			'post_url_stap_one' => '',
			'text_btn_stap_one' => '',
			'color_btn_stap_one' => ''
		]);

		$user->gifts()->create($request->all());
		return redirect()->to('/gift-construct');
	}
*/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$gift = Projects::findOrFail($id);
		return view('gift-construct', compact('gift'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$gift = Projects::findOrFail($id);
		$gift->update($request->all());
		return redirect()->to('/gift-construct');
    }
}
