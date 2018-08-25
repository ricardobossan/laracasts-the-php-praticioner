<?php

namespace App\Controllers;

class PagesController
{
	public function home()
	{

		/**
		 * A controller is an entry point for a route.
 		 * Receive the request.
		 * Delegate.
		 * return a response.

		 */

		return view('index');
	}

	public function about()
	{
		$company = 'Laracasts';

		return view('about', ['company' => $company]);
	}

	public function contact()
	{
		return view('contact');
	}
}