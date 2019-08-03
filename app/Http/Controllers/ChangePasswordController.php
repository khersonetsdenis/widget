<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
	public function index()
	{
		$user = Auth::user();

		$profile = $user->get();
		return view('pages.changePassword', compact('profile'));

		//return view('pages.profile');
	}

	public function changePassword(Request $request) {
		try {
			$valid = validator($request->only('old_password', 'new_password', 'confirm_password'), [
				'old_password' => 'required|string|min:8',
				'new_password' => 'required|string|min:8|different:old_password',
				'confirm_password' => 'required_with:new_password|same:new_password|string|min:8',
			], [
				'confirm_password.required_with' => 'Confirm password is required.'
			]);

			if ($valid->fails()) {
				return redirect()->route('password-page')->with('error', 'Ошибка при обновлении пароля');
			}
			if (Hash::check($request->get('old_password'), Auth::user()->password)) {
				$user = User::find(Auth::user()->id);
				$user->password = (new BcryptHasher())->make($request->get('new_password'));
				if ($user->save()) {
					return redirect()->route('password-page')->with('status', 'Пароль успешно изменен');
				}
			} else {
				return redirect()->route('password-page')->with('error', 'Пароль веден не правильно');
			}
		} catch (Exception $e) {
			return redirect()->route('password-page')->with('ex', 'Что-то пошло не так. Попробуйте немного позже');
		}
	}
}
