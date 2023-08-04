<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
	{
		return view('/home-user/baseHome');
	}

	public function about()
	{
		return view('/main/baseAbout');
	}
	
	public function formulir()
	{
		return view('/main/baseForm');
	}

	public function selesai()
	{
		return view('/main/baseMain');
	}

}
