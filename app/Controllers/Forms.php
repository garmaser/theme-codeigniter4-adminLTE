<?php

namespace App\Controllers;

class Forms extends BaseController
{
	public function index()
	{
		return view('pages_adminLTE/forms/advanced');
	}

	public function advanced()
	{
		return view('pages_adminLTE/forms/advanced');
	}

	public function editors()
	{
		return view('pages_adminLTE/forms/editors');
	}
	public function general()
	{
		return view('pages_adminLTE/forms/general');
	}
	public function validation()
	{
		return view('pages_adminLTE/forms/validation');
	}


	//--------------------------------------------------------------------

}
