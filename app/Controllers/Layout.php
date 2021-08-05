<?php

namespace App\Controllers;

class Layout extends BaseController
{
	public function index()
	{
		return view('pages_adminLTE/layout/top-nav');
	}

	public function top_nav()
	{
		return view('pages_adminLTE/layout/top-nav');	
	}
	
	
	public function top_nav_sidebar()
	{
		return view('pages_adminLTE/layout/top-nav-sidebar');
	}
	
	public function boxed()
	{
		return view('pages_adminLTE/layout/boxed');
	}
	
	public function fixed_sidebar()
	{
		return view('pages_adminLTE/layout/fixed-sidebar');
	}
	
	public function fixed_sidebar_custom()
	{
		return view('pages_adminLTE/layout/fixed-sidebar-custom');
	}

	public function fixed_topnav()
	{
		return view('pages_adminLTE/layout/fixed-topnav');
	}

	public function fixed_footer()
	{
		return view('pages_adminLTE/layout/fixed-footer');
	}

	public function collapsed_sidebar()
	{
		return view('pages_adminLTE/layout/collapsed-sidebar');
	}
	
	//--------------------------------------------------------------------
	
}
