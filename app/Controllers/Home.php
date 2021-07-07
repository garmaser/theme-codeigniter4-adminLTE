<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('pages_adminLTE/index');
	}
	public function dashboardv2()
	{
		return view('pages_adminLTE/index2');
	}
	public function dashboardv3()
	{
		return view('pages_adminLTE/index3');
	}
	

	//--------------------------------------------------------------------

}
