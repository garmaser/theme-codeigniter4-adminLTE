<?php

namespace App\Controllers;

class Examples extends BaseController
{
	public function index()
	{
		return view('pages_adminLTE/examples/404');
	}

	public function error_404()
	{
		return view('pages_adminLTE/examples/404');
	}

	public function error_500()
	{
		return view('pages_adminLTE/examples/500');
	}
	public function blank()
	{
		return view('pages_adminLTE/examples/blank');
	}
	public function contact_us()
	{
		return view('pages_adminLTE/examples/contact-us');
	}
	public function contacts()
	{
		return view('pages_adminLTE/examples/contacts');
	}
	public function e_commerce()
	{
		return view('pages_adminLTE/examples/e-commerce');
	}
	public function faq()
	{
		return view('pages_adminLTE/examples/faq');
	}
	public function forgot_password()
	{
		return view('pages_adminLTE/examples/forgot-password');
	}
	public function forgot_password_v2()
	{
		return view('pages_adminLTE/examples/forgot-password-v2');
	}
	public function invoice()
	{
		return view('pages_adminLTE/examples/invoice');
	}
	public function invoice_print()
	{
		return view('pages_adminLTE/examples/invoice-print');
	}
	public function language_menu()
	{
		return view('pages_adminLTE/examples/language-menu');
	}
	public function legacy_user_menu()
	{
		return view('pages_adminLTE/examples/legacy-user-menu');
	}
	public function lockscreen()
	{
		return view('pages_adminLTE/examples/lockscreen');
	}
	public function login()
	{
		return view('pages_adminLTE/examples/login');
	}
	public function login_v2()
	{
		return view('pages_adminLTE/examples/login-v2');
	}
	public function pace()
	{
		return view('pages_adminLTE/examples/pace');
	}
	public function profile()
	{
		return view('pages_adminLTE/examples/profile');
	}
	public function project_add()
	{
		return view('pages_adminLTE/examples/project-add');
	}
	public function project_detail()
	{
		return view('pages_adminLTE/examples/project-detail');
	}
	public function project_edit()
	{
		return view('pages_adminLTE/examples/project-edit');
	}
	public function projects()
	{
		return view('pages_adminLTE/examples/projects');
	}
	public function recover_password()
	{
		return view('pages_adminLTE/examples/recover-password');
	}
	public function recover_password_v2()
	{
		return view('pages_adminLTE/examples/recover-password-v2');
	}
	public function register()
	{
		return view('pages_adminLTE/examples/register');
	}
	public function register_v2()
	{
		return view('pages_adminLTE/examples/register-v2');
	}

	//--------------------------------------------------------------------

}
