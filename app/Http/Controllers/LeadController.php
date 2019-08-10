<?php

namespace App\Http\Controllers;

use App\Mail\LeadMail;
use App\User;
use App\Leads;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
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

		$leads = $user->leads()->get();
		return view('pages.leads', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function create()
	{
		return view('pages.leads');
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

		$this->validate($request, [
			'name' => 'required',
			'phone' => 'required'
		]);

		DB::table('users')->decrement('gifts', 1);

		if (Carbon::now()->addDays(5) && Auth::user()->gifts < 0) {
			return null;
		} else {
			Mail::to($user)->send(new LeadMail($user));

			$leads = $user->leads()->create($request->all());

			return response()->json($leads);
		}


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$leads = Leads::findOrFail($id);
		dd($leads);
		return view('pages.leads', compact('leads'));

		//return response()->json(Leads::find($id));
    }
}
