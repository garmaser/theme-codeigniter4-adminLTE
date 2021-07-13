<?php

namespace App\Controllers;

class Tables extends BaseController
{
	public function index()
	{
		return view('pages_adminLTE/tables/data');
	}

	public function data()
	{
		return view('pages_adminLTE/tables/data');
	}

	public function jsgrid()
	{
		return view('pages_adminLTE/tables/jsgrid');
	}
	public function simple()
	{
		return view('pages_adminLTE/tables/simple');
	}



	//--------------------------------------------------------------------

}
