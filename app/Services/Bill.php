<?php


namespace App\Services;


use App\Mail\BillMail;
use App\Mail\BillSuccessMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Bill implements BillInterface
{
	public function bill()
	{

		$user = Auth::user();

		if (Carbon::now() && Auth::user()->gifts < 0) {
			Mail::to($user)->send(new BillMail($user));
		} else Mail::to($user)->send(new BillSuccessMail($user));
	}

}