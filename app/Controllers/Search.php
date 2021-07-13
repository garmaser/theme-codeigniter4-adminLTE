<?php

namespace App\Controllers;

class Search extends BaseController
{
	public function index()
	{
		return view('pages_adminLTE/search/enhanced');
	}

	public function enhanced()
	{
		return view('pages_adminLTE/search/enhanced');
	}

	public function enhanced_results()
	{
		return view('pages_adminLTE/search/enhanced-results');
	}
	public function simple()
	{
		return view('pages_adminLTE/search/simple');
	}
	public function simple_results()
	{
		return view('pages_adminLTE/search/simple-results');
	}


	//--------------------------------------------------------------------

}
