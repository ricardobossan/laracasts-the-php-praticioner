<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
	public function index()
	{
		// select * from users
		$users = User::all();

		return view('users/index', compact('users'));
	}

	public function store()
	{
		$user = new User;

		$user->name = request('name');
		$user->name = request('email');
		$user->name = bcrypt(request('password'));

		$user->save();

		return back();
	}
}
