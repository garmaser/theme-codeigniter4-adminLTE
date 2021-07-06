<?php

namespace App\Controllers;

class Charts extends BaseController
{
	public function index()
	{
		return view('pages_adminLTE/charts/chartjs');
	}

	public function chartjs()
	{
		return view('pages_adminLTE/charts/chartjs');
	}

	public function flot()
	{
		return view('pages_adminLTE/charts/flot');
	}
	public function inline()
	{
		return view('pages_adminLTE/charts/inline');
	}
	public function uplot()
	{
		return view('pages_adminLTE/charts/uplot');
	}


	//--------------------------------------------------------------------

}
