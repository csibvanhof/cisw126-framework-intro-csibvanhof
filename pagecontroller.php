<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
	public function homepage()	{
		return view('welcome');
}

	public function profilepage()	{
		return view('profile');
}

}
